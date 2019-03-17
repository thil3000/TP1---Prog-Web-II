<!-- Page:aceuil.php 
	 Auteur: Thierry Légaré , Vincent Boies
	 Date:Février 2019
-->

<?php
	$_GET['carID'] = '1';
	include "../controller/financementController.php";
	try{
		echo '<br>';
		echo 'calculate interest: ' . 'prix:10000 et 2000 d\'account expect: 8000 rep: ' . calculateTotalCost(10000,2000);
		echo '<br>';
		echo 'calculate mensualite: ' . 'auto: 10000, terme:60 mois, interet= 7.20% expected: 198.96 rep: ' . number_format(calculateMensualite(10000,60, 0.0720/12),2);  //a remodifier
		echo '<br>';
		echo 'calculate total interest: ' . 'carprice = 10000 duration In Months = 60 mensualité = 198.96 expected: 1937.42 rep: ' . calculateTotalInterest(198.96,60,10000) . ' ca passe...';
		echo '<br>';
		echo 'calculate taxe: ' . 'car price=10000 expected=1497.50 rep: ' . calculateTaxe(10000);
		echo '<br>';
		echo 'montant a financer: ' . 'car price=10000 interet=1937.42 exected=11937.42 rep: ' . montantAFinancer(10000,1937.42); 
		echo '<br>';
		echo 'get interest: ' . 'car price=10000 duration in months=60 expected=6 rep: ' . getInterestRate(10000,60);
		echo '<br>';
		echo 'get interest: ' . 'car price=10001 duration in months=60 expected=5.85 rep: ' . getInterestRate(10001,60);
		
	}

	catch(exception $e){
		echo '1-une exeption s\'est produite. message derrueur #' . getMessage();
	}
?>