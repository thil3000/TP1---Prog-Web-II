<!-- Page:index.php 
	 Auteur: Thierry Légaré , Vincent Boies
	 Date:Février 2019
-->

<?php 
	require 'modeles/auto.php';
//	include 'vues/banner.php';
	
	$make = isset($_GET['make']) ? $_GET['make'] : '';
	$model = isset($_GET['model']) ? $_GET['model'] : '';
	
	if($make != '' && $model != ''){	//make && model != ''
		if(validateMakeAndModel($make,$model)){
			header("Location:controller/selectionController.php?make=$make&model=$model");
		}
	}
	else
	require 'vues/acceuil.php';
	
	echo '<h2>Voiture du jour</h2>';
	include 'vues/photocaroussel.php';
?>