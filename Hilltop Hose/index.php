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
			<div id="content" style="text-align: center;">
				<br>
				Welcome to the website of Hilltop Hose Company 5 here in Ansonia, Connecticut!
				<br>
				<br>
				<br>
				<br>
				<img src="files/images/firehouse_front.jpg" width="500" height="400">
			</div>
		</main>
		
		<footer>
			Hilltop Hose Company Inc. &copy;<?php echo date('Y'); ?>
		</footer>
	</body>
</html>