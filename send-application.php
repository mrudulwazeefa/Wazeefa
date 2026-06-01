<?php
require_once __DIR__ . '/includes/mail-config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: career-details.php');
    exit;
}

function safe_post($key) {
    return isset($_POST[$key]) ? trim(strip_tags($_POST[$key])) : '';
}

$firstName = safe_post('firstName');
$lastName = safe_post('lastName');
$email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
$phone = safe_post('phone');
// prefer the fully formatted international number if provided by the intl-tel-input hidden field
if (empty($phone) && isset($_POST['phone_national'])) {
    $phone = safe_post('phone_national');
}
$state = safe_post('state');
$place = safe_post('place');
$applyingFor = safe_post('applyingFor');
$experience = safe_post('experience');
$additionalInfo = safe_post('additionalInfo');

$subject = "Job Application: " . ($applyingFor ?: 'Application');

$body = "Job application submitted via website\n\n";
$body .= "Name: " . $firstName . ' ' . $lastName . "\n";
$body .= "Email: " . $email . "\n";
$body .= "Phone: " . $phone . "\n";
$body .= "Applying For: " . $applyingFor . "\n";
$body .= "Experience: " . $experience . "\n";
$body .= "State: " . $state . "\n";
$body .= "Place: " . $place . "\n\n";
$body .= "Additional Info:\n" . $additionalInfo . "\n";

$sent = false;
$errorMessage = '';

// Attachment handling
$attachmentField = 'attachment';
$attachPath = '';
if (!empty($_FILES[$attachmentField]) && $_FILES[$attachmentField]['error'] === UPLOAD_ERR_OK) {
    $fileTmp = $_FILES[$attachmentField]['tmp_name'];
    $fileName = basename($_FILES[$attachmentField]['name']);
    $fileSize = $_FILES[$attachmentField]['size'];
    // Basic validation: max 10MB
    if ($fileSize > 10 * 1024 * 1024) {
        $_SESSION['flash'] = ['type' => 'error', 'message' => 'Attachment exceeds 10MB limit.'];
        header('Location: career-details.php');
        exit;
    }
    $attachPath = $fileTmp;
}

// Use PHPMailer when available
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require __DIR__ . '/vendor/autoload.php';

    $mail = new \PHPMailer\PHPMailer\PHPMailer(true);
    try {
        $smtpConfigured = !empty($SMTP_HOST) && !empty($SMTP_USER) && (!$SMTP_AUTH || !empty($SMTP_PASS));
        if ($smtpConfigured) {
            $mail->isSMTP();
            $mail->Host = $SMTP_HOST;
            $mail->SMTPAuth = $SMTP_AUTH;
            if ($SMTP_AUTH) {
                $mail->Username = $SMTP_USER;
                $mail->Password = $SMTP_PASS;
            }
            if (!empty($SMTP_SECURE)) $mail->SMTPSecure = $SMTP_SECURE;
            if (!empty($SMTP_PORT)) $mail->Port = (int)$SMTP_PORT;
        }

        $fromAddress = !empty($MAIL_FROM) ? $MAIL_FROM : $email;
        if ($smtpConfigured && !empty($SMTP_USER)) {
            $fromAddress = $SMTP_USER;
        }
        $mail->setFrom($fromAddress, 'Website Application');
        $mail->addAddress($MAIL_TO_CAREER);
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $mail->addReplyTo($email);
        }

        if ($attachPath) {
            $mail->addAttachment($attachPath, $fileName);
        }

        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AltBody = $body;
        $mail->isHTML(false);

        if ($smtpConfigured) {
            $sent = $mail->send();
            if (!$sent) {
                $errorMessage = 'Mailer error: ' . $mail->ErrorInfo;
            }
        } else {
            $sent = false;
            $errorMessage = 'SMTP not fully configured. Please set SMTP_HOST, SMTP_USER, and SMTP_PASS.';
        }
    } catch (\PHPMailer\PHPMailer\Exception $e) {
        $sent = false;
        $errorMessage = $e->getMessage();
    }
} else {
    // Fallback to PHP mail()
    $headers = [];
    $headers[] = 'From: "Website Application" <' . $MAIL_FROM . '>';
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $headers[] = 'Reply-To: ' . $email;
    }
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-Type: text/plain; charset=UTF-8';

    $extra_params = '';
    if (!empty($MAIL_FROM)) {
        $extra_params = '-f' . escapeshellarg($MAIL_FROM);
    }

    $sent = @mail($MAIL_TO_CAREER, $subject, $body, implode("\r\n", $headers), $extra_params);
    if (!$sent) $errorMessage = 'PHP mail() returned false';
}

if ($sent) {
    $_SESSION['flash'] = ['type' => 'success', 'message' => 'Application submitted. We will review and contact you.'];
    header('Location: career-details.php');
    exit;
} else {
    $_SESSION['flash'] = ['type' => 'error', 'message' => 'Failed to send application. ' . ($errorMessage ?: '')];
    header('Location: career-details.php');
    exit;
}
