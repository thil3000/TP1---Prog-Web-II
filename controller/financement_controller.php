<!-- Page:financement_controller.php 
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
		<header>
			<h1 id="title"><a href="../index.php">Achat de vehicule</a></h1>
		</header>
		
		<?php
			//Include
			include "../modeles/auto.php";

			// Define
			
			define("TAXE", 0.14975);
			
			//Initialisation validation et assignation
			
			$car_id = isset($_GET["car_id"]) ? $_GET["car_id"]: "";
			$duration_in_months = isset($_POST["duration"]) ? $_POST["duration"]: 60;
			$account = isset($_POST["account"]) ? $_POST["account"]: 0;
			
			$account = str_replace(",",".",$account);
			$account = filter_var($account,FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION);
			
			$car_price = null;
			
			if($car_id !== ""){
				$car_price = get_car_price($car_id);
			}
			else{
				throw new Exception("Véhicule non trouvé", 1);
			}
			
			if($account > $car_price){
				throw new Exception("Account doit être plus petit que le prix de l\'auto total", 3);
			}
			else if($account < 0){
				throw new Exception("Account doit être un chifre positif", 4);
			}
			
			
			//Fonction
			function calculate_total_cost($car_price,$account){
				return $car_price - $account;
			}
			
			function calculate_taxe($car_price){
				return $car_price * TAXE;
			}
			
			function calculate_mensualite($total_cost,$duration_in_months,$interest_rate){
				$interest_rate = ($interest_rate/100)/12;
				$pow = pow((1+$interest_rate),$duration_in_months);
				$car_final_value_per_months = $total_cost * (($interest_rate * $pow) / ($pow - 1));
				return $car_final_value_per_months;
			}

			function calculate_total_interest($mensualite, $duration_in_months, $total_cost){
				$interst = ($mensualite * $duration_in_months) - $total_cost;
				return $interst;
			}

			function montant_a_financer($total_cost,$total_interest){
				return $total_cost + $total_interest;
			}

			function get_interest_rate($car_price,$duration_in_months){
				$interest_rate;
				switch ($duration_in_months) {
					case "12":
						if($car_price <= 10000)
							$interest_rate = 6.95;
						else
							$interest_rate = 7.25;
						break;
					case "24":
						if($car_price <= 10000)
							$interest_rate = 6.95;
						else
							$interest_rate = 7.25;
						break;
					case "36":
						if($car_price <= 10000)
							$interest_rate = 6.25;
						else
							$interest_rate = 6.30;
						break;
					case "48":
						if($car_price <= 10000)
							$interest_rate = 6.10;
						else
							$interest_rate = 6.30;
						break;
					case "60":
						if($car_price <= 10000)
							$interest_rate = 6.0;
						else
							$interest_rate = 5.85;
						break;
				}
				return $interest_rate;
			}

			$total_cost = calculate_total_cost($car_price, $account);
			$taxe = calculate_taxe($total_cost);
			$interest_rate = get_interest_rate($car_price,$duration_in_months);
			$mensualite = calculate_mensualite($total_cost,$duration_in_months,($interest_rate));
			$total_interest = calculate_total_interest($mensualite,$duration_in_months,$total_cost);
			$montant_a_financer = montant_a_financer($total_cost,$total_interest);
			
			$tab_total = ["Prix" => $car_price,"Acompte" => $account,"Cout total" => $total_cost, "Taxe" => $taxe,"Total d'interêt" => $total_interest,"Montant à financer" => $montant_a_financer,"Mensualité" => $mensualite];
			
			include "../vues/financement.php";
			
		?>
		<footer>
			<?php
				//include "../vues/footer.php";
			?>
		</footer>
	</body>
</html>
