<?php
echo"Under Construction"
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_form = '2manmeetkhana@gmail.com';

    $email_subject = $_POST['subject'];

    $email_body =   "User Name: $name.\n"
                    "User Email: $visitor_email.\n"
                    "User Message: $message.\n"


    $to = "mkhanna2@gmu.edu"

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n"

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");
    
?>