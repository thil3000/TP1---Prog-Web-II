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
			<img class="banner" src="images/bannerphp.php" alt="Baniere" width="50%" />
			<h1>Achat de vehicule</h1>
		</header>
		
		
<!-- 		<div id="dropdown"> -->
			<?php 
				define('GET_MAKE', 'make');
				define('GET_MODEL', 'model');
				require 'modeles/auto.php';		
				
				$make = isset($_GET[GET_MAKE]) ? $_GET[GET_MAKE] : '';
				$model = isset($_GET[GET_MODEL]) ? $_GET[GET_MODEL] : '';
				if(validateMakeAndModel($make,$model)){
					header("Location:controller/selectionController.php?make=$make&model=$model");
				}
				else
				require 'vues/accueil.php';
			?>
<!-- 		</div> -->
		
		
		
		<div class="photoCarousel">
			<?php
				echo '<h2>Voiture du jour</h2>';
				include 'vues/photocaroussel.php';
			?>
		</div>
		
		
		<footer>
			
		</footer>
	</body>
</html>
