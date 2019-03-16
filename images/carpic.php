<?php
	require '../modeles/auto.php';
	define("GET_ID", "id");
	
	$id = isset($_GET[GET_ID]) ? $_GET[GET_ID] : '';
	$path = "../" . getCarFromId($id)[CAR_IMAGE];
	$im = imagecreatefromjpeg($path);
	if($im !== false){
		list($w,$h) = getimagesize($im);
		$nw = $w;
		$nh = $h;
		$truecolor = imagecreatetruecolor($nw, $nh);
		imagecopyresampled($truecolor, $im, 0, 0, 0, 0, $nw, $nh, $w, $h);
		header( "Content-type: image/jpeg" );
		imagejpeg( $im );
		imagedestroy( $im );
	}
?>