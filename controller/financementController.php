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
			
			// $carValue = isset($_POST['Price']) ? $_POST['price']: null;
			// $account = isset($_POST['account']) ? $_POST['accont']: null;
			
				function calculatefinancement($carValue, $account){
					return $carValue - $account;
				}
				function calculateMensualite($carValue, $durationInMounts, $interest){
					$carFianalValuePerMounts = $carValue * pow(($interest(1+$interest)),$durationInMounts) / pow(((1+$interest)- 1),$durationInMounts);
					return $carFianalValuePerMounts;
				}

				function calculateInterest($carPricePerMount,$carValue,  $durationInMounts ,$account){
					$interst = ($carPricePerMount * $durationInMounts) - getCarValueWithAccount($carValue, $account);
					return $interst;
				}

				function calculateTaxe($carFinalValue){
					return $carFinalValue * TAXE;
				}

			try{
				echo 'prix:10000 et 2000 d\'account' . calculatefinancement(10000,2000);
				echo 'mensualiter quand auto=10000 ,interest=1000 mois=36' . calculateMensualite(10000,36,1000);
				echo 'calculater  les Interets quand auto=10000, price per mounth = 400, durer = 36 mois , account=0' . calculateInterest(400,10000,36,0);
				echo 'calculer les taxes quand prix final auto = 10000' . calculateTaxe(10000);
			}

			catch(exception $e){
				echo '1-une exeption s\'est produite. message derrueur #' . getMessage();
			}
		?>
	</body>
</html>
