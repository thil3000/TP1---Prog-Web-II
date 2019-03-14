<!-- Page:selectionController.php 
	 Auteur: Thierry Légaré , Vincent Boies
	 Date:Février 2019
-->
<html>
	<head>
		<meta charset="UTF-8">
		<title>Achat de vehicule</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>	
		<?php
			require '../modeles/auto.php';

			function getCarSearchResult($make,$model){
				return getCars($make, $model);
			}

			$tab_search_result = array();
			$make = isset($_GET["make"])?$_GET["make"]:'';
			$model = isset($_GET["model"])?$_GET["model"]:'';
			if (validateMakeAndModel($make,$model)){
				$tab_search_result = getCarSearchResult($make,$model);
			}

			require '../vues/selection.php';
		?>
	</body>
</html>
