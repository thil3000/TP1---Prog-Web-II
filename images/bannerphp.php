<?php
	
	if(file_exists("banner.jpg")){
		$im = imagecreatefromjpeg("banner.jpg");
		$x = imagesx($im);
		$y = imagesy($im);
		$newx = $x * 0.75;
		$newy = $y * 0.75;
		$truecolor = imagecreatetruecolor($newx, $newy);
		imagecopyresampled($truecolor, $im, 0, 0, 0, 0, $newx, $newy, $x, $y);
		header( "Content-type: image/jpeg" );
		imagejpeg( $truecolor );
		imagedestroy( $truecolor );
	}
?>	