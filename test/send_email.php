<?php
	// Pear Mail Library
	require_once "Mail\Mail-1.3.0\Mail.php";

	$from = '<emailsender827@gmail.com>';
	$to = '<muneerahmed48@live.com>';
	$subject = 'Hi!';
	$body = "Hi,\n\nHow are you?";

	$headers = array(
		'From' => $from,
		'To' => $to,
		'Subject' => $subject
	);

	$smtp = Mail::factory('smtp', array(
			'host' => 'ssl://smtp.gmail.com',
			'port' => '465',
			'auth' => true,
			'username' => 'emailsender827@gmail.com',
			'password' => 'emailsender1994'
		));

	$mail = $smtp->send($to, $headers, $body);

	if (PEAR::isError($mail)) {
		echo('<p>' . $mail->getMessage() . '</p>');
	} else {
		echo('<p>Message successfully sent!</p>');
	}
?>
