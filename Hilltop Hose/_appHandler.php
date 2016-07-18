<?php
error_reporting(E_ALL);
	ini_set("display_errors", 1);
	require 'includes/datalayer.php';

	$f_name = $_POST['f_name'];
	$l_name = $_POST['l_name'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$phone = $_POST['phone'];
	$why = $_POST['why'];
	
	$app = new Application($f_name, $l_name, $address, $city, $phone, $why);
	submitApplication($app);
	
	header('location:info.php?msg=Thank you, your application has been submitted!')
?>