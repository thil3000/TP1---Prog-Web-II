<?php
	$im = imagecreatefromjpeg('banner.jpg');
	if($im !== false){
		$x = imagesx($im);
		$y = imagesy($im)
		
		$truecolor = imagecreatetruecolor($w, $h);
		imagecopyresampled($truecolor, $im, 0, 0, 0, 0, $w, $h, $w, $h);
		header( "Content-type: image/jpeg" );
		imagejpeg( $truecolor );
		imagedestroy( $truecolor );
	}
?>	