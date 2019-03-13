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
	echo "<div class=\"cars\">";
	echo "   <img src=\"carpic.php?image=$carimage\">";
	echo "   <h3>$carMaker $carModel</h3>";
	echo "   <p>$carYear $carColor $carKm</p>";
	echo "   <a href=\"controller/fincancementController.php\">$carPrice</a>"; //a ou submit de $car
	echo "</div>";
}
?>