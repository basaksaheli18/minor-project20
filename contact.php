<?php
$name -$_POST['name'];
$visitor_email =$_POST['email'];
$message =$_POST['message'];

$email_from ='basaksaheli18@gmail.com';
$email_subject =" New From Submission";
$email_body = "User Name: $name.\n";
              "User Emal: $visitor_email.\n";
                 "User Message: $message.\n";

$to ="oishipaul225@gmail.com";
$headers = "From: $email_from\r\n";
$headers = "Reply-To: $visitor_email\r\n";
mail($to.$email_body,$headers);
header("Locatio: index.html");

?>
