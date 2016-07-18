<?php
	session_start();
	
	if(isset($_SESSION['name'])){
		session_destroy();
		header('location:index.php');
	}

	require 'includes/templates.php';
?>

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
				<br>
				<?php 
					if(isset($_GET['error'])){
						echo htmlentities($_GET['error']);
					}
				?>
				<br>
				<form action="_loginHandler.php" method="post">
					Username: <input type="text" name="username" required="required"/>
					Password: <input type="password" name="password" required="required"/>
					<input type="submit" value="Login"/>
				</form><br><br>
				<b>User: jeffreyo Pass: Engine5</b><br>
				<b>User: alexh Pass: ban</b>
			</div>
		</main>
		
		<footer>
			Hilltop Hose Company Inc. &copy;2016
		</footer>
	</body>
</html>