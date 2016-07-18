<?php
	require 'classes/message.php';

	//Get the needed variables from Post.
	$msgType = $_POST['type'];
	$recipients = explode(',', $_POST['recipients']);
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	
	//Display for debuging.
	echo 'Type: ' . $msgType . '<br><br>';
	echo 'Recipients: ' . implode(',',$recipients) . '<br><br>';
	echo 'Subject: ' . $subject . '<br><br>';
	echo 'Message: ' . $message;
	
	//Failed Arrays
	$failed_emails = array();
	$failed_texts = array();
	
	
	//Loop through the user ids to be notified.
	foreach ($recipients as $recipient){
		
		//Sends an email if selected.
		if($msgType == 'email'){
			if($user = sendEmail($recipient, $subject, $message))
				array_push($failed_emails, $user);
		}
		
		//Sends a text message if selected.
		elseif($msgType == 'text'){
			if($user = sendTextMessage($recipient, $subject, $message))
				array_push($failed_texts, $user);
		}
		
		//Sends a combination of text messaging & email if selected.
		elseif($msgType == 'comb'){
			if($user = sendEmail($recipient, $subject, $message))
				array_push($failed_emails, $user);
			
			if($user = sendTextMessage($recipient, $subject, $message))
				array_push($failed_texts, $user);
		}
	}
	
	//Display for debuging.
	echo '<br><br>Failed Emails: ' . implode(',', $failed_emails);
	echo '<br>Failed Texts: ' . implode(',', $failed_texts);
?>