<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// required files
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset ($_POST["email"])) {

    $mail = new PHPMailer(true);

    $email = $_POST["email"];

    try {

        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'lorem.ipsum.sample.email@gmail.com';
        $mail->Password = 'tetmxtzkfgkwgpsc';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        // Recipients
        $mail->setFrom('lover@gmail.com', 'Secret Santa');
        $mail->addAddress($_POST["email"]);

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Your secret lover!';
        // $otp = rand(100000, 999999);
        // $mail->Body = "The one time password is '.$otp<br>'
        $mail->Body = " <p>Underneath the moon's enchanting gaze, I Confess :</p><br>
        <p>My heart reveals it's truth : I am utterly captivated by You 😘</p>";
        while (true) {
            $mail->send();
        }
        // echo "
        //     <script>
        //     alert('Message was sent successfully. Thank your for reaching us!');
        //     document.location.href = 'index.php';
        //     </script>
        // ";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

?>