<?php
    $name = $_Post['name'];
    $visitor_email = $Post['email'];
    $message = $Post['message'];

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                    "User Message": "$message.\n";

    $to = 'catarinapinto1991@gmail.com';

    $headers "From: $email_from \r\n";

    $headers .= "Reply-to $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");

?>
