<?php
	require "../modeles/auto.php";
	define("GET_ID", "id");

	$id = isset($_GET[GET_ID]) ? $_GET[GET_ID] : "";
	$new_size = isset($_GET["new_size"]) ? $_GET["new_size"] : "";
	$path = "../modeles/car_img/" . get_car_from_id($id)[CAR_IMAGE];
	
	if(file_exists($path)){
		$im = imagecreatefromjpeg($path);
		$x = imagesx($im);
		$y = imagesy($im);
		$ratio = $x/$y;
		if($x>$y){
			$new_x = $new_size;
			$new_y = ($new_x/$ratio);
		}
		else if ($y > $x){
			$new_x = $x*$ratio;
			$new_y = $new_size;
		}
		
		$true_color = imagecreatetruecolor($new_x, $new_y);
		imagecopyresampled($true_color, $im, 0, 0, 0, 0, $new_x, $new_y, $x, $y);
		header( "Content-type: image/jpeg" );
		imagejpeg( $true_color );
		imagedestroy( $true_color );
	}
?>