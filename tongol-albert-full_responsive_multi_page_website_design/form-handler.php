<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['message'];

$email_from = 'info@yourwebsite.com';
$email_subject = 'New Form Submission';
$email_body =   "User FirstName: $firstname.\n".
                "User LastName: $lastname.\n".
                "User Email: $email.\n".
                "User Message: $message.\n".;

$to = 'atongoljr24@gmail.com';
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");



?>