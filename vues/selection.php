<!-- Page:selection.php 
	 Auteur: Thierry Légaré , Vincent Boies
	 Date:Février 2019
-->

<?php
	foreach ($tab_search_result as $car) {
		$carimage = null;//$car.image...
		$carMaker = $car["Make"];
		$carModel = $car["Model"];
		$carPrice = $car["Price"];
		$carYear = $car["Year"];
		$carColor = $car["Color"];
		$carKm = $car["KM"];
		echo "<br>";
		echo "<div class=\"car\">";
		echo "   <img class=\"carImg\" src=\"carpic.php?image=$carimage\">";
		echo "   <h3 class=\"carMakeModel\">$carMaker $carModel</h3>";
		echo "   <p class=\"carOtherInfo\">$carYear $carColor $carKm</p>";
		echo "   <a class=\"carPrice\" href=\"controller/fincancementController.php?car=$car\">$carPrice</a>"; //a ou submit de $car
		echo "</div>";
	}
?>