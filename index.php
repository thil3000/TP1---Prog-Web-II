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
			<img src="images/bannerphp.php" alt="Baniere" />
			<h1 id="title"><a href="index.php">Achat de vehicule</a></h1>
			<div id="dropdown">
				<?php 
					define("GET_MAKE", "make");
					define("GET_MODEL", "model");
					require "modeles/auto.php";		
					
					$make = isset($_GET[GET_MAKE]) ? $_GET[GET_MAKE] : "";
					$model = isset($_GET[GET_MODEL]) ? $_GET[GET_MODEL] : "";
					if(validateMakeAndModel($make,$model)){
						header("Location:controller/selectionController.php?make=$make&model=$model");
					}
					else
					require "vues/accueil.php";
				?>
			</div>
		</header>
		
		<div class="photoCarousel">
			<?php
				echo "<h2 id=\"carrouselTitle\">Voitures du jour</h2>";
				include "vues/photocaroussel.php";
			?>
		</div>
		
		<footer>
			
		</footer>
	</body>
</html>
