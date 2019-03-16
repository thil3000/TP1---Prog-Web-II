<!-- Page:selectionController.php 
	 Auteur: Thierry Légaré , Vincent Boies
	 Date:Février 2019
-->
<html>
	<head>
		<meta charset="UTF-8">
		<title>Achat de vehicule</title>
		<link rel="stylesheet" href="../css/style.css">
	</head>
	<body>	
	<img class="banner" src="../images/bannerphp.php" alt="Baniere" width="50%">
		<?php
			define('GET_MAKE', 'make');
			define('GET_MODEL', 'model');
			require '../modeles/auto.php';

			function getCarSearchResult($make,$model){
				return getCarsFromMakeModel($make, $model);
			}

			$tab_search_result = array();
			$make = isset($_GET[GET_MAKE])?$_GET[GET_MAKE]:'';
			$model = isset($_GET[GET_MODEL])?$_GET[GET_MODEL]:'';
			if (validateMakeAndModel($make,$model)){
				$tab_search_result = getCarSearchResult($make,$model);
			}

			require '../vues/selection.php';
		?>
	</body>
</html>
