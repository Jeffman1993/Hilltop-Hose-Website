<?php

	session_start();

	function getHeader(){
		echo '
			<div id="toolbar">
				<ul>';
		
		if(!isset($_SESSION['name']))
			echo '<li><a href="login.php">Member Login</a></li>';
		else{
			if($_SESSION['user_id'] == 39)
				echo '<li><a href="admin.php">Admin Access</a> &nbsp;&nbsp;&nbsp;|</a></li>';
			echo "<li><a href='member.php'>Member Dashboard &nbsp;&nbsp;&nbsp;|</a></li>";
			echo "<li><a href='login.php'>Log out, " . $_SESSION['name'] . "</a></li>";
		}
			echo
				'</ul>
			</div>
			
			<div id="banner">
				<div id="logo">
				</div>
				<div id="header">
				</div>
			</div>
				';
	}
	
	
	function getNav(){
		echo '
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="gallery.php">Gallery</a></li>
				<li><a href="application.php">Application</a></li>
				<li><a href="members.php">Members</a></li>
				<li><a href="messager.php">Messager</a></li>
			</ul>
				';
	}

?>