<!-- Page:index.php 
	 Auteur: Thierry Legare , Vincent Boies
	 Date:Fevrier 2019
-->
<html>
	<head>
		<meta charset="UTF-8">
		<title>Achat de vehicule</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<header>
			<h1 id="title"><a href="index.php">Achat de vehicule</a></h1>
			<?php 
				define("GET_MAKE", "make");
				define("GET_MODEL", "model");
				require "modeles/auto.php";		
				
				$make = isset($_GET[GET_MAKE]) ? $_GET[GET_MAKE] : "";
				$model = isset($_GET[GET_MODEL]) ? $_GET[GET_MODEL] : "";
				if(validate_make_and_model($make,$model)){
					header("Location:controller/selection_controller.php?make=$make&model=$model");
				}
				else
				require "vues/accueil.php";
			?>
		</header>
		
		<?php
			include "vues/photo_caroussel.php";
		?>
		
		<footer>
			<?php
				//include "vues/footer.php";
			?>
		</footer>
	</body>
</html>
