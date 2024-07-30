<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$mobile = $_POST['mobile'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'domain name email';

$email_subject = 'New Form submission';

$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n".
               "User Phone: $mobile.\n".
               "Subject: $subject.\n".
               "User Message: $message.\n";

$to = 'sphesihleharry@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");


              
?>