<?php 
	require 'includes/templates.php';
	require 'classes/gallery.php';
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
				<?php getPhotoGallery(); ?>
			</div>
		</main>
		
		<footer>
			Hilltop Hose Company Inc. &copy;2016
		</footer>
	</body>
</html>