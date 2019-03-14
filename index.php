<!-- Page:index.php 
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
		<img src="vues/banner.php" />
		<?php 
			require 'modeles/auto.php';		
			
			$make = isset($_GET['make']) ? $_GET['make'] : '';
			$model = isset($_GET['model']) ? $_GET['model'] : '';
			
			if($make != '' && $model != ''){	//make && model != ''
				if(validateMakeAndModel($make,$model)){
					header("Location:controller/selectionController.php?make=$make&model=$model");
				}
			}
			else
			require 'vues/accueil.php';
			
			echo '<h2>Voiture du jour</h2>';
			include 'vues/photocaroussel.php';
		?>
	</body>
</html>
