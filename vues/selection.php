<!-- Page:selection.php 
	 Auteur: Thierry Légaré , Vincent Boies
	 Date:Février 2019
-->

<?php
	function showCarFromId($carID) {
		$car = getCarFromId($carID);
		$carImage = $car[CAR_IMAGE];
		$carMaker = $car[CAR_MAKE];
		$carModel = $car[CAR_MODEL];
		$carPrice = $car[CAR_PRICE];
		$carYear = $car[CAR_YEAR];
		$carColor = $car[CAR_COLOR];
		$carKm = $car[CAR_KM];
		echo "<br>";
		echo "<div class=\"car\">";
		echo "   <div class=\"carElems\">";
		echo "      <div class=\"carElem\">";
		echo "         <div class=\"carImg\">";
		echo "            <a href=\"../modeles/$carImage\"><img src=\"../images/carpic.php?id=$carID\"></a>";
		echo "         </div>";
		echo "      </div>";
		
		echo "      <div class=\"carElem\">";
		echo "         <div class=\"carMakeModel\">";
		echo "            <h3>$carMaker $carModel</h3>";
		echo "         </div>";
		echo "      </div>";
		
		echo "      <div class=\"carElem\">";
		echo "         <div class=\"carOtherInfo\">";
		echo "            <p>Year:$carYear <br>Color:$carColor <br>KM:$carKm KM</p>";
		echo "         </div>";
		echo "      </div>";
		
		echo "      <div class=\"carElem\">";
		echo "         <div class=\"carPrice\">";
		echo "            <a href=\"financementController.php?carID=$carID\">$carPrice</a>";
		echo "         </div>";
		echo "      </div>";
		echo "   </div>";
		echo "</div>";	

	}
	
	function showAllCar($tab_search_result) {
		foreach ($tab_search_result as $carID) {
				showCarFromId($carID);
			}
	}
?>