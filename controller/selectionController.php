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
	<header>
		<img src="../images/bannerphp.php" alt="Baniere" />
		<h1 id="title"><a href="../index.php">Achat de vehicule</a></h1>
	</header>
		<?php
			define("GET_MAKE", "make");
			define("GET_MODEL", "model");
			
			require "../modeles/auto.php";
			require "../vues/selection.php";

			function getCarSearchResult($make,$model){
				return getCarsFromMakeModel($make, $model);
			}

			$tab_search_result = array();
			$make = isset($_GET[GET_MAKE])?$_GET[GET_MAKE]:"";
			$model = isset($_GET[GET_MODEL])?$_GET[GET_MODEL]:"";
			if (validateMakeAndModel($make,$model)){
				$tab_search_result = getCarSearchResult($make,$model);
				showAllCar($tab_search_result);
			}
		?>
	</body>
</html>
