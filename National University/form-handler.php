<?php
$name = #_post['name'];
$visitor_email = #_post['email'];
$subject = #_post['subject'];
$message = #_post['message'];

$email_from= 'info@yourwebsite.com'

$email_subject= 'New Form Submission'

$email_body= "User Name: $name.\n".
				"User Email: $visitor_email.\n".
					"Subject: $subject.\n".
						"User Message: $message.\n";

$to = 'kavenbeso@gmail.com';

$headers = "From: $email_from \r\r";

$headers .= "Reply-to: $visitor_email \r\n";


mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");



?>