<!-- Page:aceuil.php 
	 Auteur: Thierry Légaré
	 Date:Février 2019
-->

<?php
	function getCarList() {
		return $tab_cars = array(
			array("Make" => "123","Model" => "Model","Price" => "Price","Year" => "Year","Color" => "Color","KM" => "KMs"),
			array("Make" => "456","Model" => "Model","Price" => "Price","Year" => "Year","Color" => "Color","KM" => "KMs"),
		);
	
	}
	
	function getMakeList(){
		$tab_cars = getCarList();
		$tab_maker = array();
		$i=0;
		foreach ($tab_cars as $value) {
			$tab_maker[$i] = $value["Make"];
			$i++;
		}
		return $tab_maker;
	}
?>