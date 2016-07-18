<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	require 'includes/templates.php';
	require 'classes/user.php';
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
				
				<?php 
					foreach(getUsers() as $user){
						echo '&malt;' . $user->full_name . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . $user->rank . '<br>';
					}
				?>
				
			</div>
		</main>
		
		<footer>
			Hilltop Hose Company Inc. &copy;<?php echo date('Y'); ?>
		</footer>
	</body>
</html>