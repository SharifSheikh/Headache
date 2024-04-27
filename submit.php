<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to_email = "SharifSheikh9080@gmail.com"; // Change this to your email address

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $subject = "New form submission";
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    // Send email
    if (mail($to_email, $subject, $body)) {
        echo "Email sent successfully!";
    } else {
        echo "Email sending failed.";
    }
} else {
    echo "Error: Form not submitted.";
}
?>