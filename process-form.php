<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $to = "fadysaied63@gmail.com"; 
    $subject = "New Contact Form Submission";

    $message_body = "Name: $name\n";
    $message_body .= "Email: $email\n";
    $message_body .= "Phone: $phone\n";
    $message_body .= "Message:\n$message\n";

    // Additional headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $message_body, $headers)) {
        echo "Thank you for your message. It has been sent.";
    } else {
        echo "Oops! Something went wrong, and we couldn't send your message.";
    }
} else {
    echo "This script is meant to be accessed via a form submission.";
}
?>