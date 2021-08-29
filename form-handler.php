<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$contact = $_POST['contact number'];
$message = $_POST['message'];

$email_from = 'info@aquavicta.com';

$email_subject = 'New Enquiry';

$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n".
                "User contact: $contact.\n".
                "User Message: $message.\n";


$to = 'harshdadiyal123@gmail.com';
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: contact us.html");








?>