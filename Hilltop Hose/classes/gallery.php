<?php
	function getPhotoGallery(){
		require 'includes/queries.php';
		
		$sql = 'SELECT location FROM hilltop.gallery';
		$res = query($sql);
	
		while($row = $res->fetch_assoc()){
			echo "<img class='img_gallery' src='" . $row['location'] . "' width='300' height='200'>";
		}
	}
?>