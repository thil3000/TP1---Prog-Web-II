<!-- Page:selectionController.php 
	 Auteur: Thierry Légaré , Vincent Boies
	 Date:Février 2019
-->

<?php
require '../modeles/auto.php';

function getCarSearchResult($make,$model){
	//echo "$make $model";
	return getCars($make, $model);
}

$tab_search_result = array();
$make = isset($_GET["make"])?$_GET["make"]:'';
$model = isset($_GET["model"])?$_GET["model"]:'';
if ($make != '' && $model != ''){
	if(validateMake($make && validateModel($model)))
	$tab_search_result = getCarSearchResult($make,$model);
}

require '../vues/selection.php';
?>