<!-- Page:financementController.php 
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

			define('TAXE', 0,14975);

			function Calculatefinancement($carValue, $account){
				return $carValue - $account;
			}
			function calculateMensualite($carValue, $durationInMounts, $interest){
				$carFianalValuePerMounts = $carValue * (($interest(1+$interest) ) * exp($durationInMounts) / ((1+$interest) * exp($durationInMounts) - 1));
				return $carFianalValuePerMounts;
			}

			function calculateInterest($carValuePerMount,$carValue,  $durationInMounts ,$account){
				$interst = ($carValuePerMount * $durationInMounts) - getCarValueWithAccount($carValue, $account);
				return $interst;
			}

			function calculateTaxe($carFinalValue){
				return $carFinalValue * TAXE;
			}
		?>
	</body>
</html>
