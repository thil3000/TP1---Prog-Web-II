<?php
	require '../modeles/auto.php';
	define("GET_ID", "id");

	$id = isset($_GET[GET_ID]) ? $_GET[GET_ID] : '';
	$path = "../" . getCarFromId($id)[CAR_IMAGE];
	
	if(file_exists($path)){
		$im = imagecreatefromjpeg($path);
		$x = imagesx($im);
		$y = imagesy($im);
		$newx = 200;
		$newy = 200;
		$truecolor = imagecreatetruecolor($newx, $newy);
		imagecopyresampled($truecolor, $im, 0, 0, 0, 0, $newx, $newy, $x, $y);
		header( "Content-type: image/jpeg" );
		imagejpeg( $truecolor );
		imagedestroy( $truecolor );
	}
?>