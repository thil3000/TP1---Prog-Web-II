<?php
	require '../modeles/auto.php';
	define("GET_ID", "id");

	$id = isset($_GET[GET_ID]) ? $_GET[GET_ID] : '';
	$path = "../modeles/carIMG/" . getCarFromId($id)[CAR_IMAGE];
	
	if(file_exists($path)){
		$im = imagecreatefromjpeg($path);
		$x = imagesx($im);
		$y = imagesy($im);
		$ratio = $y/$x;
		$newx=200;
		$newy=$y;
		if($x>$y){
			$newx = 200;
			$newy = $x*$ratio;
		}
		else if ($y > $x){
			$newx = $y*$ratio;
			$newy = 200;
		}
		
		$truecolor = imagecreatetruecolor($newx, $newy);
		imagecopyresampled($truecolor, $im, 0, 0, 0, 0, $newx, $newy, $x, $y);
		header( "Content-type: image/jpeg" );
		imagejpeg( $truecolor );
		imagedestroy( $truecolor );
	}
?>