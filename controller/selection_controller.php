<!-- Page:selection_controller.php 
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
		<h1 id="title"><a href="../index.php">Achat de vehicule</a></h1>
	</header>
		<?php
			define("GET_MAKE", "make");
			define("GET_MODEL", "model");
			
			require "../modeles/auto.php";
			require "../vues/selection.php";

			function get_car_search_result($make,$model){
				return get_cars_from_make_model($make, $model);
			}

			$tab_search_result = array();
			$make = isset($_GET[GET_MAKE])?$_GET[GET_MAKE]:"";
			$model = isset($_GET[GET_MODEL])?$_GET[GET_MODEL]:"";
			if (validate_make_and_model($make,$model))
				show_all_car(get_car_search_result($make,$model));
		?>
	</body>
</html>
