<!-- Page:aceuil.php 
	 Auteur: Thierry Légaré , Vincent Boies
	 Date:Février 2019
-->

<?php
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