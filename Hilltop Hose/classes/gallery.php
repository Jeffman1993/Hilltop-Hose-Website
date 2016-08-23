<?php

	class Photo{
		public $id, $name, $description, $source;
	}

	class Album{
		public $id, $name, $description;
		public $photos = Array();
	}

	function getPhotoGallery(){
		
		$albums = getAlbums();
		
		foreach ($albums as $aIndex=>$album){
			$img = current($album->photos)->source;
			echo "<div class='album_cover' style='background-image: url($img);'>$album->name</div>";
		}
	}
	
	function getAlbums(){
		require 'includes/queries.php';
		
		$albums = Array();
		
		//Get Albums.
		$sql = 'SELECT * FROM hilltop.albums';
		$res = query($sql);
		
		while($row = $res->fetch_assoc()){
			$album = new Album();
				$album->id = $row['album_id'];
				$album->name = $row['album_name'];
				
			$albums[$album->id] = $album;
		}
		
		
		//Get Photos
		foreach ($albums as $key=>$value){
			$sql = "SELECT * FROM hilltop.photos WHERE album_id = $key";
			$res = query($sql);
			
			while($row = $res->fetch_assoc()){
				$photo = new Photo();
					$photo->id = $row['photo_id'];
					$photo->name = $row['name'];
					$photo->source = $row['source'];
					
				$albums[$key]->photos[$photo->id] = $photo;
			}
		}
		
		return $albums;
	}
?>