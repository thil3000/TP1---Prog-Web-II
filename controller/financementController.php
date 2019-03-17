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
		include '../vues/financement.php';

			define('TAXE', 0,14975);
			$car = isset($_GET['carID']) ? $_GET['carID']: '';
			$carValue = null;
			$durantionInMounts = isset($_POST['duration']) ? $_POST['duration']: 60;
			$account = isset($_POST['account']) ? $_POST['account']: 0;
		
			if($car != ''){
				$carValue = getCarPrice($car);
			}
			else{
				throw new Exception("Véhicule non trouvé", 1);
			}
			
			
			if($account > $carValue){
				throw new Exception("Account doit être plus petit que le prix de l\'auto total", 3);
			}

			elseif($account < 0){
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

				function calculateInterest($carPrice, $durationInMounts){
					// $interst = ($carPricePerMount * $durationInMounts) - getCarValueWithAccount($carValue, $account);
					switch ($durationInMounts) {
						case '12':
							if($carPrice <= 10000){
								$interst = 6.95;
							}
							else{
								$interst = 7.25;
							}
							break;
						case '24':
							if($carPrice <= 10000){
								$interst = 6.95;
							}
							else{
								$interst = 7.25;
							}
							break;
						case '36':
							if($carPrice <= 10000){
								$interst = 6.25;
							}
							else{
								$interst = 6.30;
							}
							break;
						case '48':
							if($carPrice <= 10000){
								$interst = 6.10;
							}
							else{
								$interst = 6.30;
							}
							break;
						case '60':
							if($carPrice <= 10000){
								$interst = 6.0;
							}
							else{
								$interst = 5.85;
							}
							break;
					}
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
