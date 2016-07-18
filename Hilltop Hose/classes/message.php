<?php
	/**
	 * @param integer $userId
	 * @param string $subject
	 * @param string $message
	 * @return On failure, returns the full name of the recipient.
	 */
	function sendEmail($userId, $subject, $message){
		require_once 'classes/user.php';
		
		$user = getUser(null,$userId);
		$to = $user->email;
		$headers = 'From:Alert@HilltopHose.org' . "\r\n";
		$headers .= 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	
		if($user->email != null)
			mail($to, $subject, $message, $headers);
		else
			return $user->full_name;
	}
	
	
	/**
	 * @param integer $userId
	 * @param string $subject
	 * @param string $message
	 * @return On failure, returns the full name of the recipient.
	 */
	function sendTextMessage($userId, $subject, $message){
		require_once 'classes/user.php';
		
		$user = getUser(null,$userId);
		$to = $user->phone . '@' . $user->carrier_domain;
		$headers = 'From:Alert@HilltopHose.org' . "\r\n";
		
		if(($user->phone != null) || ($user->carrier_domain != null))
			mail($to, $subject, $message, $headers);
		else
			return $user->full_name;
	}
?>