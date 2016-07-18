<?php
	require 'classes/user.php';
	session_start();
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$user = getUser(strtolower($username));
	
	if($user == null){
		header('location:login.php?error=User not found.');
	}
	else if($password == $user->pass){
		$_SESSION['user_id'] = $user->id;
		$_SESSION['name'] = $user->full_name;
		$_SESSION['l_name'] = $user->last_name;
		$_SESSION['rank'] = $user->rank;
		
		header('location:member.php');
	}
	else{
		header('location:login.php?error=Incorrect password!');
	}
?>