<!-- Page:selection.php 
	 Auteur: Thierry Légaré , Vincent Boies
	 Date:Février 2019
-->

<?php
	foreach ($tab_search_result as $carID) {
		$car = getCarFromId($carID);
		$carMaker = $car[CAR_MAKE];
		$carModel = $car[CAR_MODEL];
		$carPrice = $car[CAR_PRICE];
		$carYear = $car[CAR_YEAR];
		$carColor = $car[CAR_COLOR];
		$carKm = $car[CAR_KM];
		echo "<br>";
		echo "<div class=\"car\">";
		echo "   <img class=\"carImg\" src=\"../images/carpic.php?id=$carID\">";
		echo "   <h3 class=\"carMakeModel\">$carMaker $carModel</h3>";
		echo "   <p class=\"carOtherInfo\">$carYear $carColor $carKm</p>";
		echo "   <a class=\"carPrice\" href=\"controller/fincancementController.php?carID=$carID\">$carPrice</a>";
		echo "</div>";	
	}
?>