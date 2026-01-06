<?php
$to = "toapple687@gmail.com";
$subject = "Test Email";
$message = "Hello, this is a test email!";
$headers = "From: abalidaniel55@gmail.com\r\n";
$headers .= "Reply-To: abalidaniel55@gmail.com\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

if(mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Email sending failed!";
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
}
?>