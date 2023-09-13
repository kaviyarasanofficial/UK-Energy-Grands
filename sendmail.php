<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["form_name"];
    $email = $_POST["form_email"];
    $phone = $_POST["form_phone"];
    $subject = $_POST["form_subject"];
    $message = $_POST["form_message"];

    $to = "surveys@ukenergygrants.com"; // Replace with your email address
    $subject = "Customer Reach Your Service: $subject";
    $message = "Name: $name\nEmail: $email\nPhone: $phone\nMessage:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo '<script>alert("Thank you for your message. We will contact you shortly.");</script>';
        // Redirect back to the previous page
        echo '<script>window.history.go(-1);</script>';
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
} else {
    echo "This page cannot be accessed directly.";
}
?>
