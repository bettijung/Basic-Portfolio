<?php
	$name = $_POST['name'];
	$guestEmail = $_POST['guestEmail'];
	$guestMessage = $_POST['guestMessage'];
	$from = 'From: BasicBioPage';
	$to = 'bettinajunghahn@gmail.com';
	$subject = 'EmailFromBioPage';

	$body = "From: $name\n E-mail: $email\n Message:\n $message";

if ($_POST['sumbit']) {
	if (mail ($to, $subject, $body, $from)) {
		echo '<p>Your message has been sent!</p>';
	} else {
		echo '<p>Something went wrong, go back and try again!</p>';
	}
}
?