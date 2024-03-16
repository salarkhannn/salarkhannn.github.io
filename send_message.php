<?php
if (isset($_POST['submit'])) {
    $to = "salarkhanlala@gmail.com"; // Your email address
    $from = $_POST['email']; // Sender's email address
    $subject = "Message from Website";
    $message = $_POST['message'];

    // Headers
    $headers = "From:" . $from;

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Your message has been sent.');</script>";
    } else {
        echo "<script>alert('Failed to send your message. Please try again later.');</script>";
    }
}
?>
