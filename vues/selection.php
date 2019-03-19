<!-- Page:selection.php 
	 Auteur: Thierry Légaré , Vincent Boies
	 Date:Février 2019
-->

<?php
	function show_car_from_id($car_id) {
		$car = get_car_from_id($car_id);
		$car_image = $car[CAR_IMAGE];
		$car_maker = $car[CAR_MAKE];
		$car_model = $car[CAR_MODEL];
		$car_price = $car[CAR_PRICE];
		$car_year = $car[CAR_YEAR];
		$car_color = $car[CAR_COLOR];
		$car_km = $car[CAR_KM];
		echo "<br>";
		echo "<div class=\"car\">";
		echo "      <div class=\"carElem\">";
		echo "         <div class=\"carImg\">";
		echo "            <a target=\"_blank\" href=\"../modeles/car_img/$car_image\"><img src=\"../images/car_pic.php?id=$car_id&new_size=200\"></a>";
		echo "         </div>";
		echo "      </div>";
		
		echo "      <div class=\"carElem\">";
		echo "         <div class=\"carMakeModel\">";
		echo "            <h3>$car_maker $car_model</h3>";
		echo "         </div>";
		echo "      </div>";
		
		echo "      <div class=\"carElem\">";
		echo "         <div class=\"carOtherInfo\">";
		echo "            <p>Année: $car_year <br>Couleur: $car_color <br>Kms: $car_km Km</p>";
		echo "         </div>";
		echo "      </div>";
		
		echo "      <div class=\"carElem\">";
		echo "         <div class=\"carPrice\">";
		echo "            <a href=\"financement_controller.php?car_id=$car_id\">" . number_format($car_price,2) . "$</a>";
		echo "         </div>";
		echo "      </div>";
		echo "</div>";	

	}
	
	function show_all_car($tab_search_result) {
		echo "<div class=\"content\">";
		echo "<div class=\"cars\">";
		foreach ($tab_search_result as $car_id) {
				show_car_from_id($car_id);
		}
		echo "</div>";
		echo "</div>";
	}
?>