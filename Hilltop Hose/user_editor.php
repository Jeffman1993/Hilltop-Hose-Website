<?php
require 'includes/templates.php';
require 'includes/datalayer.php';

if(isset($_SESSION['user_id'])){
	if($_SESSION['user_id'] != 39)
		header('location:member.php');
}else
	header('location:member.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	//$user = new Member($first_name, $last_name, $suffix, $rank);
	//updateMember($user);
}

$id;
$f_name;
$l_name;
$address;
$city;
$phone;

if(isset($_GET['id'])){
	$id = $_GET['id'];
	
	$user = getMember(null,$id);
	
	$f_name = $user->first_name;
	$l_name = $user->last_name;
	$address = $user->address;
	$city = $user->city;
	$phone = $user->phone;
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Hilltop Hose Company 5</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		
		<style>
			tr{
				border: 1px solid white;
			}
		</style>
		
	</head>
	<body>
		<header>
			<?php getHeader(); ?>
		</header>
		
		<nav>
			<?php getNav(); ?>
		</nav>
		
		<main>
			<div id="content" style="text-align: center;">
				<h2>Add/Edit User</h2><br>
				
				<form method="post">
					
					<input type="hidden" name="id" value="<?php echo $id; ?>">
				
					<label>First Name:</label>
					<input type="text" name="f_name" value="<?php echo $f_name; ?>"><br><br>
					
					<label>Last Name:</label>
					<input type="text" name="l_name" value="<?php echo $l_name; ?>"><br><br>
					
					<label>Address:</label>
					<input type="text" name="address" value="<?php echo $address; ?>"><br><br>
					
					<label>City:</label>
					<input type="text" name="city" value="<?php echo $city; ?>"><br><br>
					
					<label>Phone:</label>
					<input type="text" name="phone" value="<?php echo $phone; ?>"><br><br>
					<input type="submit" value="Update">
				</form>
				
			</div>
		</main>
		
		<footer>
			Hilltop Hose Company Inc. &copy;<?php echo date('Y'); ?>
		</footer>
	</body>
</html>