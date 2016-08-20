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
				<form method="post" action="_msgHandler.php" autocomplete="off">
					Message Type:<br>
					<input type="radio" name="type" value="email" required="required"> Email
					<input type="radio" name="type" value="text" required="required"> Text Message
					<input type="radio" name="type" value="comb" required="required"> Email &amp; Text<br><br>
					
					Recipients:<br><br>
					<select id="users" multiple>
					
						
					</select>
					
					
					<div id='members' style='display:none;'>
						<?php 
						echo '-1|All Members';
						echo ',0|Officers';
							foreach(getUsers() as $user){
								echo ',' . $user->id . '|' . $user->full_name;
							}
						?>
						</div>
					
					
					<button onclick='addUser()' type="button">Add</button>
					<button onclick='removeUser()' type="button">Remove</button>
					
					<select id="recipients" multiple>
					</select><br><br><br>
					<input id="recip" name="recipients" type="hidden">
					
					Subject:<br>
					<input type="text" name="subject" required="required"><br><br>
					
					Message:<br><br>
					<textarea name="message" rows="15" cols="100" required="required"></textarea><br><br>
					
					<input type="button" onclick='submitForm()' value="Send Message">
					<input id='s' type="submit" style='display:none;'>
				</form>
			</div>
		</main>
		
		<footer>
			Hilltop Hose Company Inc. &copy;<?php echo date('Y'); ?>
		</footer>
	</body>
	<script src='js/messager.js' type="text/javascript"></script>
</html>