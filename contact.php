<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Add your validation and processing logic here

    // Example: send a simple email
    $to = "larrybrenner12@gmail.com";
    $headers = "From: $email";
    $mail_body = "Name: $name\nEmail: $email\nSubject: $subject\n\n$message";

    if (mail($to, $subject, $mail_body, $headers)) {
        echo "success";
    } else {
        echo "Error sending the message.";
    }
}
?>