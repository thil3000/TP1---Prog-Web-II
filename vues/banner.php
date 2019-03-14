<!-- Page:vues.php 
	 Auteur: Thierry Légaré , Vincent Boies
	 Date:Février 2019
-->

<?php
	header ("Content-type: image/jpeg");
	$image = imagecreatefromjpeg("../images/banner.jpg");
	imagejpeg($image);
?>	