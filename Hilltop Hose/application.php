<?php require 'includes/templates.php';?>

<!DOCTYPE html>
<html>
	<head>
		<title>Hilltop Hose Company 5</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<header>
			<?php getHeader(); ?>
		</header>
		
		<nav>
			<?php getNav(); ?>
		</nav>
		
		<main>
			<div id="content">
				<div style="margin-top: 30px;">
					
					<h2>Membership Application</h2><br>
					
					<form method="post" action="_appHandler.php">
						<label for="f_name">First Name:</label>
						<input id="f_name" type="text" name="f_name" required="required">
						
						<label for="l_name">Last Name:</label>
						<input id="l_name" type="text" name="l_name" required="required"><br><br>
						
						<label for="address">Address:</label>
						<input id="address" type="text" name="address" required="required">
						
						<label for="city">City:</label>
						<input id="city" type="text" name="city" required="required"><br><br>
						
						<label for="phone">Phone Number:</label>
						<input id="phone" type="text" name="phone" required="required"><br><br><br>
						
						<label for="why">Why would you like to become a member?</label><br>
						<textarea id="why" rows="3" cols="40" name="why" required="required"></textarea><br><br>
						
						<input type="submit" value="Apply">
					</form>
				</div>
			</div>
		</main>
		
		<footer>
			Hilltop Hose Company Inc. &copy;<?php echo date('Y'); ?>
		</footer>
	</body>
</html>