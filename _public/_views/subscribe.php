<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

    if ($email) {
        $mail = new PHPMailer(true);
        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host = 'mail.codeaxe.co.in'; // Set the SMTP server to send through
            $mail->SMTPAuth = true;
            $mail->Username = 'contact@codeaxe.co.in'; // SMTP username
            $mail->Password = 'Q$OLf-xZXPd*'; // SMTP password
            $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587; // TCP port to connect to

            // Recipients
            $mail->setFrom('no-reply@codeaxe.co.in', 'Newsletter');
            $mail->addAddress($email); // Add a recipient

            // Content
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = 'Welcome to our Newsletter!';
            $mail->Body    = '<h1>Thank you for subscribing!</h1><p>We\'re excited to have you on board. Stay tuned for our latest news and updates.</p>';

            $mail->send();
            echo 'Thank you for subscribing! Please check your email for confirmation.';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "Invalid email address. Please enter a valid email.";
    }
} else {
    echo "Invalid request method.";
}
