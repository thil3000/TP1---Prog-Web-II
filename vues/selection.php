<!-- Page:selection.php 
	 Auteur: Thierry Légaré , Vincent Boies
	 Date:Février 2019
-->

<?php
	$tab_cars = getCarList();
	foreach ($tab_search_result as $car) {
		$carimage = null;//$car.image...
		$carMaker = $car[CAR_MAKE];
		$carModel = $car[CAR_MODEL];
		$carPrice = $car[CAR_PRICE];
		$carYear = $car[CAR_YEAR];
		$carColor = $car[CAR_COLOR];
		$carKm = $car[CAR_KM];
		$carIndex = array_search($car, $tab_cars);
		if($carIndex === false){
			echo "Car not found";
		}
		echo "<br>";
		echo "<div class=\"car\">";
		echo "   <img class=\"carImg\" src=\"carpic.php?image=$carimage\">";
		echo "   <h3 class=\"carMakeModel\">$carMaker $carModel</h3>";
		echo "   <p class=\"carOtherInfo\">$carYear $carColor $carKm</p>";
		echo "   <a class=\"carPrice\" href=\"controller/fincancementController.php?carID=$carIndex\">$carPrice</a>";
		echo "</div>";
	}
?>