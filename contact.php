<?php
if($_POST) {
    // 1. EDIT THIS LINE WITH YOUR EMAIL ADDRESS
    $to_email = "gm@titusfc.co.za"; 

    $subject = "New Inquiry from Titus Website";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Construct the email body
    $body = "Name: $name\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";
    $headers = "From: $email";

    // Send email
    if(mail($to_email, $subject, $body, $headers)) {
        echo "<script>alert('Thank you! We have received your message.'); window.location.href='index.html';</script>";
    } else {
        echo "Sorry, something went wrong. Please try again or WhatsApp us.";
    }
}
?>