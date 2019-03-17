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
		include '../modeles/auto.php';

			define('TAXE', 0,14975);
			$car = isset($_GET['carID']) ? $_GET['carID']: '';
			$carValue = null;
			if($car != ''){
				$carValue = ;
			}
			else{
				throw new Exception("Véhicule non trouvé", 1);
			}
			// $durantionInMounts = isset($_POST['duration']) ? $_POST['duration']: null;
			 $account = isset($_POST['account']) ? $_POST['accont']: null;

			 	
			if($account == ''){
						throw new Exception("Account non trouvé", 2);
					}
			if($account > $carValue){
				throw new Exception("Account doit être plus petit que le prix de l\'auto total", 3);
			}

			if($account < 0){
				throw new Exception("Account doit être un chifre positif", 4);
			}
				function calculatefinancement(){
					
					return $carValue - $account;
				}
				
				function calculateMensualite($durationInMounts, $interest){
					$pow = pow((1+$interest),$durationInMounts);
					$carFianalValuePerMounts = $carValue * (($interest * $pow) / ($pow - 1));
					return $carFianalValuePerMounts;
				}

				function calculateInterest($carPricePerMount,$durationInMounts){
					$interst = ($carPricePerMount * $durationInMounts) - getCarValueWithAccount($carValue, $account);
					return $interst;
				}

				function calculateTaxe($carValue){
					return $carValue * TAXE;
				}


				function caculateCarTotal($carVal, $carPricePerMount, $duration, $interest){
					$finencement = calculatefinancement($carVal, $account);
					$mensualite = calculateMensualite($carVal ,$duration, $interest);
					$interestAffichage = calculateInterest($carPricePerMount, $carVal, $duration, $account);
					$taxe = calculateTaxe($carVal);
					$tab_total = [$finencement, $mensualite , $interestAffichage, $taxe];
					foreach ($tab_total as $value) {
						echo "$value";
					}
				}
		?>
	</body>
</html>
