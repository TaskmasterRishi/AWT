<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// required files
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST["email"])) {

    $mail = new PHPMailer(true);

    $email = $_POST["email"];

    try {

        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'lorem.ipsum.sample.email@gmail.com';
        $mail->Password   = 'tetmxtzkfgkwgpsc';
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;

        // Recipients
        $mail->setFrom('lorem.ipsum.sample.email@gmail.com', 'Dharmesh G Patel');
        $mail->addAddress($_POST["email"]);
        $mail->addReplyTo('lorem.ipsum.sample.email@gmail.com', 'Dharmesh G Patel');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Thank You for Reaching Out!';
        $mail->Body = "
            <p>Dear Subscriber,</p>

            <p>Welcome to our newsletter! We're thrilled to have you on board.</p>
            
            <p>Get ready to receive exciting updates, exclusive offers, and valuable content straight to your inbox.</p>
            
            <p>Feel free to reach out if you have any questions or feedback. We're here to help!</p>
            
            <p>Thank you for subscribing!</p>
            
            <p>Best regards,<br>Lorem Ipsum</p>

        ";

        $mail->send();
        echo "
            <script>
            alert('Message was sent successfully. Thank your for reaching us!');
            document.location.href = 'index.php';
            </script>
        ";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
