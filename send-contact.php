<?php
require_once __DIR__ . '/includes/mail-config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php');
    exit;
}

function safe_post($key) {
    return isset($_POST[$key]) ? trim(strip_tags($_POST[$key])) : '';
}

$first_name = safe_post('first_name');
$last_name = safe_post('last_name');
$email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
$phone = safe_post('phone');
if (empty($phone) && isset($_POST['phone_national'])) $phone = safe_post('phone_national');
$help = safe_post('help');

$subject = "Contact form submission from " . ($first_name ?: 'Website');

$body = "Contact form submission\n\n";
$body .= "Name: " . $first_name . ' ' . $last_name . "\n";
$body .= "Email: " . $email . "\n";
$body .= "Phone: " . $phone . "\n\n";
$body .= "Message:\n" . $help . "\n";

$sent = false;
$errorMessage = '';

// Use PHPMailer via Composer when available for reliable SMTP delivery.
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
        $mail->setFrom($fromAddress, 'Website Contact');
        $mail->addAddress($MAIL_TO_CONTACT);
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $mail->addReplyTo($email);
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
    // Fallback to PHP mail() if Composer/PHPMailer is not installed
    $headers = [];
    $headers[] = 'From: "Website Contact" <' . $MAIL_FROM . '>';
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $headers[] = 'Reply-To: ' . $email;
    }
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-Type: text/plain; charset=UTF-8';

    $extra_params = '';
    if (!empty($MAIL_FROM)) {
        $extra_params = '-f' . escapeshellarg($MAIL_FROM);
    }

    $sent = @mail($MAIL_TO_CONTACT, $subject, $body, implode("\r\n", $headers), $extra_params);
    if (!$sent) $errorMessage = 'PHP mail() returned false';
}

if ($sent) {
    $_SESSION['flash'] = ['type' => 'success', 'message' => 'Your message was sent. We will contact you shortly.'];
    header('Location: contact.php');
    exit;
} else {
    $_SESSION['flash'] = ['type' => 'error', 'message' => 'Failed to send message. ' . ($errorMessage ?: '')];
    header('Location: contact.php');
    exit;
}
