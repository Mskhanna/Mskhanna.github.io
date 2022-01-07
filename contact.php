<?php

    if(isset($_POST['submit'])
    {
        $name = $_POST['name'];
        $email_from = $_POST['email'];
        $message = $_POST['message'];
        $email_subject = $_POST['subject'];

        $to = "mkhanna2@gmu.edu";
       
        $headers = "From: ".$email_from;

        $txt =   "You have received an email from" .$name.".\n\n" .$message;
   
        mail($to,$email_subject,$txt,$headers);
        header("Location: index.html?mailsend");
    
    }
?>