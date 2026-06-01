<?php
// Mail configuration loaded from environment variables or .env file for security.

// Load .env file if it exists ( for development )
$envFile = __DIR__ . '/../.env';
if ( file_exists( $envFile ) ) {
    $lines = file( $envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES );
    foreach ( $lines as $line ) {
        if ( strpos( $line, '#' ) === 0 ) continue;
        // Skip comments
        if ( strpos( $line, '=' ) === false ) continue;
        list( $key, $value ) = explode( '=', $line, 2 );
        $key = trim( $key );
        $value = trim( $value );
        if ( !empty( $key ) && !getenv( $key ) ) {
            putenv( "$key=$value" );
        }
    }
}

// Recipient addresses: per-form with defaults.
// Override via .env or server environment variables.
$MAIL_TO_CONTACT = getenv( 'MAIL_TO_CONTACT' ) ?: 'mrudulkgingertech@gmail.com';
$MAIL_TO_CAREER = getenv( 'MAIL_TO_CAREER' ) ?: 'mrudul1@gmail.com';

// From address used in the From header. Use an address on your domain when possible.
$MAIL_FROM = getenv( 'MAIL_FROM' ) ?: '';

// SMTP configuration ( for PHPMailer )
$SMTP_HOST = getenv( 'SMTP_HOST' ) ?: '';
$SMTP_USER = getenv( 'SMTP_USER' ) ?: '';
$SMTP_PASS = getenv( 'SMTP_PASS' ) ?: '';
$SMTP_PORT = getenv( 'SMTP_PORT' ) ?: '';
$SMTP_SECURE = getenv( 'SMTP_SECURE' ) ?: '';
// 'ssl' or 'tls' or empty

// If you prefer to disable SMTP auth set SMTP_AUTH = false in env
$SMTP_AUTH = ( getenv( 'SMTP_AUTH' ) === 'false' ) ? false : true;

// Helpful check: If required values are missing, handlers will fall back to PHP mail() where available,
// but for reliable Gmail delivery configure SMTP_* env variables and install PHPMailer via Composer.

?>
