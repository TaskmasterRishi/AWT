<?php
ini_set("SMTP", "smtp.example.com");
ini_set("smtp_port", "25"); // Use the appropriate port for your SMTP server
ini_set("sendmail_from", "patoliyarishi@gmail.com");

$to = "rishipatodiya12@gmail.com";
$subject = "Test Email";
$message = "This is a test email.";

if(mail($to, $subject, $message)) {
    echo "Email sent successfully.";
} else {
    echo "Email sending failed.";
}
?>
