<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/xampp/htdocs/Getroombookings/PHPMailer-master/src/Exception.php';
require '/xampp/htdocs/Getroombookings/PHPMailer-master/src/PHPMailer.php';
require '/xampp/htdocs/Getroombookings/PHPMailer-master/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Initialize variables
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $message = $_POST['message'] ?? '';

    if (!empty($name) && !empty($email) && !empty($message)) {
        $mail = new PHPMailer(true);
        try {
            // SMTP settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Change for other email providers
            $mail->SMTPAuth = true;
            $mail->Username = 'manasmathur29@gmail.com'; // Your email
            $mail->Password = 'rytqpaxtjwrwysxh'; // App password
            $mail->SMTPSecure = 'tls'; // Encryption type
            $mail->Port = 587; // SMTP port

            // Email content
            $mail->setFrom($email, 'Enquiry');
            $mail->addAddress('mathurmanas318@gmail.com', 'Get room bookings');
            $mail->Subject = 'Query regarding The Silver package';
            $mail->Body = "Name: $name\nEmail: $email\nPhone number: $phone\nMessage: $message";

            $mail->send();
            echo 'Message has been sent successfully.';
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
        }
    } else {
        echo 'Please fill all fields.';
    }
}
?>