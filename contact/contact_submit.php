<?php
	// Grab the vars from the form
	$name = trim(utf8_decode($_POST['sender']));
	$recipient = trim(utf8_decode($_POST['recipient']));
	$email = stripslashes(trim(utf8_decode($_POST['senderEmail'])));
	$city = stripslashes(trim(utf8_decode($_POST['senderCity'])));
	$comments = stripslashes(trim(utf8_decode($_POST['comments'])));
	
	if ($recipient == '') {
		$recipient = 'inquiries@jdacsolutions.com';
	}

	$subject = 'JDAC Solutions Website Inquiry';
	$env_report = "SENDER IP:  " . getenv('REMOTE_ADDR') . "\n" .
							  "HTTP_USER_AGENT: " . getenv('HTTP_USER_AGENT');
	
	if ($name == '' || $email == '') {
		header("Location:" . $siteRoot . "/contact/contact_error.php");
	} else {
		$msg = "Hello John - You've received a new inquiry from the JDAC Solutions Website: \n\n" .
			"Name:  $name \n" .
			"Email:  $email \n" .
			"City:  $city \n\n" .
			"Comments:\n\n$comments\n\n" .
			"$env_report";
	
		mail($recipient,$subject,$msg,"From: $name <$email>");
		$name = '';
		$email = '';
		$comments = '';
		$msg = '';
		
	
		header("Location:" . $siteRoot . "/contact/thank_you.php");
	}
	
?>