<?php
	$im = imagecreatefromjpeg('banner.jpg');
	if($im !== false){
//		list($w,$h) = getimagesize($im);
//		$nw = $w/2;
//		$nh=$h/2;
//		$truecolor = imagecreatetruecolor($nw, $nh);
//		imagecopyresampled($truecolor, $im, 0, 0, 0, 0, $nw, $nh, $w, $h);
		header( "Content-type: image/jpeg" );
		imagejpeg( $im );
		imagedestroy( $im );
	}
?>	