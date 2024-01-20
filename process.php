<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

   
    $to = "contact@vinaykumar.tech";
    $subject = "New Contact Form Submission";

    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    mail($to, $subject, $message, $headers);

    // You can redirect the user to a thank-you page
    header("Location: https://cutly.me");
    exit();
}

?>
