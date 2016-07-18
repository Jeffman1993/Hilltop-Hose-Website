<?php
require 'includes/templates.php';
require 'includes/auth.php';
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
				<h3>Welcome back, <?php echo $_SESSION['rank'] . ' ' . $_SESSION['l_name'] . '.'; ?></h3>
			</div>
		</main>
		
		<footer>
			Hilltop Hose Company Inc. &copy;<?php echo date('Y'); ?>
		</footer>
	</body>
</html>