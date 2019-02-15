<?php

    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];
    
    $email_from = 'jacy@jacytodd.com';

    $email_subject = "New Submission Form";

    $email_body = "User Name: $name .\n".
                    "User Email: $visitor_email .\n".
                    "User Message: $message.\n";
    
    $to = "jstodd42@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers = "From: $email_from \r\n";
        
    mail($to,$email_subject,$headers);
    header("Location: contact.html");

?>
