<?php
	require "../modeles/auto.php";
	define("GET_ID", "id");

	$id = isset($_GET[GET_ID]) ? $_GET[GET_ID] : "";
	$path = "../modeles/carIMG/" . getCarFromId($id)[CAR_IMAGE];
	
	if(file_exists($path)){
		$im = imagecreatefromjpeg($path);
		$x = imagesx($im);
		$y = imagesy($im);
		$ratio = $x/$y;
		$newx=200;
		$newy=$y;
		if($x>$y){
			$newx = 200;
			$newy = ($newx/$ratio);
		}
		else if ($y > $x){
			$newx = $x*$ratio;
			$newy = 200;
		}
		
		$truecolor = imagecreatetruecolor($newx, $newy);
		imagecopyresampled($truecolor, $im, 0, 0, 0, 0, $newx, $newy, $x, $y);
		header( "Content-type: image/jpeg" );
		imagejpeg( $truecolor );
		imagedestroy( $truecolor );
	}
?>