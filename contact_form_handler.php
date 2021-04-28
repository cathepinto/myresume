<?php
    $name = $_Post['name'];
    $visitor_email = $_Post['email'];
    $message = $_Post['message'];

    $form_content="From: $name \n Message: $message";
    $recipient = 'catarinapinto1991@gmail.com';
    $subject = "New Form Submission";
    $mail_header = "From: catarinapinto1991@gmail.com \r\n";

    mail($recipient, $subject, $form_content, $mail_header) or die("Failed to send! Please try again later.");
    echo "Thank you for your message!"
?>
