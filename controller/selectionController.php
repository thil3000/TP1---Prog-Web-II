<!-- Page:selectionController.php 
	 Auteur: Thierry Légaré , Vincent Boies
	 Date:Février 2019
-->

<?php
include '../modeles/auto.php';

function getCarSearchResult($make,$model){
	echo $make . "<br>\n" . $model;
	return true;	
}

$make = isset($_GET["make"])?$_GET["make"]:'';
$model = isset($_GET["model"])?$_GET["model"]:'';
if ($make != '' && $model != ''){
	//if(validateMake($make && validateModel($model)))
	getCarSearchResult($make,$model);
}
?>