<?php
	require '../modeles/auto.php';
	define("GET_ID", "id");
	
	$id = isset($_GET[GET_ID]) ? $_GET[GET_ID] : '';
	$path = getcar($id)[CAR_IMAGE];
	$im = imagecreatefromjpeg("../" . $path);
	if($im !== false){
//		list($w,$h) = getimagesize($im);
//		$nw = 200;
//		$nh = 200;
//		$truecolor = imagecreatetruecolor($nw, $nh);
//		imagecopyresampled($truecolor, $im, 0, 0, 0, 0, $nw, $nh, $w, $h);
		header( "Content-type: image/jpeg" );
		imagejpeg( $im );
		imagedestroy( $im );
	}
?>