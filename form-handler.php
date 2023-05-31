<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$email_form ='info@yourwebsite.com';
$email_subject ='new form submission'
$mail_body =" user name: $name.\n".
            "user email:$visitor_email.\n".
           "subject: $subject.\n".
           "user message: $visitor_email.\n".
?>