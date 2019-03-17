<?php
	require '../modeles/auto.php';
	define("GET_ID", "id");
	
	$id = isset($_GET[GET_ID]) ? $_GET[GET_ID] : '';
	$path = "../" . getCarFromId($id)[CAR_IMAGE];
	$im = imagecreatefromjpeg($path);
	$im_small = imagescale($im, 200);
	if($im_small !== false){
		header( "Content-type: image/jpeg" );
		imagejpeg( $im_small );
		imagedestroy( $im_small );
	}
?>