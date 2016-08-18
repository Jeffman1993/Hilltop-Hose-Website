<?php
	require 'includes/templates.php';
	require 'classes/user.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Hilltop Hose Company 5</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		
		<style>
			input[type='text']{
				width: 300px;
			}
			select{
				width: 300px;
				height: 100px;
			}
			textarea{
				text-align: center;
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
				<form method="post" action="_msgHandler.php">
					Message Type:<br>
					<input type="radio" name="type" value="email"> Email
					<input type="radio" name="type" value="text"> Text Message
					<input type="radio" name="type" value="comb"> Email &amp; Text<br><br>
					
					Recipients:<br><br>
					<select id="users" multiple>
						<option value="-1">All Members</option>
						<option value="0">Officers</option>
						
						<?php 
							foreach(getUsers() as $user){
								echo "<option value='$user->id'>$user->full_name</option>";
							}
						?>
						
					</select>
					
					<button onclick='addUser()' type="button">Add</button>
					<button onclick='removeUser()' type="button">Remove</button>
					
					<select id="recipients" multiple>
					</select><br><br><br>
					<input id="recip" name="recipients" type="hidden">
					
					Subject:<br>
					<input type="text" name="subject"><br><br>
					
					Message:<br><br>
					<textarea name="message" rows="15" cols="100"></textarea><br><br>
					
					<input type="submit" value="Send Message">
				</form>
			</div>
		</main>
		
		<footer>
			Hilltop Hose Company Inc. &copy;<?php echo date('Y'); ?>
		</footer>
	</body>
	<script src='js/messager.js' type="text/javascript"></script>
</html>