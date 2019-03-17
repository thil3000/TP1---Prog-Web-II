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
			$durationInMonths = isset($_POST['duration']) ? $_POST['duration']: 60;
			$account = isset($_POST['account']) ? $_POST['account']: 0;
			
			$account = str_replace(',','.',$account);
			$account = filter_var($account,FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION);
			
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
			function calculateTotalCost($carPrice,$account){
				return $carPrice - $account;
			}
			
			function calculateTaxe($carPrice){
				return $carPrice * TAXE;
			}
			
			function calculateMensualite($totalCost,$durationInMonths,$interestRate){
				$pow = pow((1+$interestRate),$durationInMonths);
				$carFinalValuePerMonths = $totalCost * (($interestRate * $pow) / ($pow - 1));
				return $carFinalValuePerMonths;
			}

			function calculateTotalInterest($mensualite, $durationInMonths, $totalCost){
				$interst = ($mensualite * $durationInMonths) - $totalCost;
				return $interst;
			}

			function montantAFinancer($totalCost,$totalInterest){
				return $totalCost + $totalInterest;
			}

			function getInterestRate($carPrice,$durationInMonths){
				$interestRate;
				switch ($durationInMonths) {
					case '12':
						if($carPrice <= 10000)
							$interestRate = 6.95;
						else
							$interestRate = 7.25;
						break;
					case '24':
						if($carPrice <= 10000)
							$interestRate = 6.95;
						else
							$interestRate = 7.25;
						break;
					case '36':
						if($carPrice <= 10000)
							$interestRate = 6.25;
						else
							$interestRate = 6.30;
						break;
					case '48':
						if($carPrice <= 10000)
							$interestRate = 6.10;
						else
							$interestRate = 6.30;
						break;
					case '60':
						if($carPrice <= 10000)
							$interestRate = 6.0;
						else
							$interestRate = 5.85;
						break;
				}
				return $interestRate;
			}

			$totalCost = calculateTotalCost($carPrice, $account);
			$taxe = calculateTaxe($totalCost);
			$interestRate = getInterestRate($carPrice,$durationInMonths);
			$interestRate = $interestRate / 100;
			$mensualite = calculateMensualite($totalCost,$durationInMonths,($interestRate/12));
			$totalInterest = calculateTotalInterest($mensualite,$durationInMonths,$totalCost);
			$montantAFinancer = montantAFinancer($totalCost,$totalInterest);
			
			$tab_total = ["Prix" => $carPrice,"Acompte" => $account,"Cout total" => $totalCost, "Taxe" => $taxe,"Total d'interêt" => $totalInterest,"Montant à financer" => $montantAFinancer,"Mensualité" => $mensualite];
			
			include '../vues/financement.php';
			
		?>
	</body>
</html>
