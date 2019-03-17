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
			//Include
			include '../modeles/auto.php';

			// Define
			
			define('TAXE', 0.14975);
			
			//Initialisation validation et assignation
			
			$carID = isset($_GET['carID']) ? $_GET['carID']: '';
			$account = isset($_POST['account']) ? $_POST['account']: 0;
			$durationInMonths = isset($_POST['duration']) ? $_POST['duration']: 60;
		
			
			// a faire valider account
			
			$carPrice = null;
			
			if($carID != ''){
				$carPrice = getCarPrice($carID);
			}
			else{
				throw new Exception("Véhicule non trouvé", 1);
			}
			
			if($account > $carPrice){
				throw new Exception("Account doit être plus petit que le prix de l\'auto total", 3);
			}
			else if($account < 0){
				throw new Exception("Account doit être un chifre positif", 4);
			}
			
			
			//Fonction
			function calculateFinancement(){
				return $carPrice - $account;
			}
			
			function calculateTaxe($carPrice){
				return $carPrice * TAXE;
			}
			
			function calculateMensualite($interest){
				$pow = pow((1+$interest),$durationInMounts);
				$carFinalValuePerMonths = $carValue * (($interest * $pow) / ($pow - 1));
				return $carFinalValuePerMonths;
			}

			function calculateInterest(){
				// $interst = ($carPricePerMonths * $durationInMounts) - getCarValueWithAccount($carPrice, $account);
				switch ($durationInMounts) {
					case '12':
						if($carPrice <= 10000)
							$interst = 6.95;
						else
							$interst = 7.25;
						break;
					case '24':
						if($carPrice <= 10000)
							$interst = 6.95;
						else
							$interst = 7.25;
						break;
					case '36':
						if($carPrice <= 10000)
							$interst = 6.25;
						else
							$interst = 6.30;
						break;
					case '48':
						if($carPrice <= 10000)
							$interst = 6.10;
						else
							$interst = 6.30;
						break;
					case '60':
						if($carPrice <= 10000)
							$interst = 6.0;
						else
							$interst = 5.85;
						break;
				}
				return $interst;
			}

//			$finencement = calculateFinancement($carPrice, $account);
//			$mensualite = calculateMensualite($carPrice ,$durationInMonths, $interest);
//			$interestAffichage = calculateInterest($carPricePerMonths, $carVal, $duration, $account);
//			$taxe = calculateTaxe($carVal);
//			$tab_total = [$finencement, $mensualite , $interestAffichage, $taxe];
//			foreach ($tab_total as $value) {
//				//echo "$value";
//			}
			
			include '../vues/financement.php';
			
		?>
	</body>
</html>
