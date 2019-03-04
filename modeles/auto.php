<!-- Page:aceuil.php 
	 Auteur: Thierry Légaré , Vincent Boies
	 Date:Février 2019
-->

<?php
	function getCarList() {
		return $tab_cars = array(
			array("Make" => "Honda","Model" => "Civic Dx","Price" => "450","Year" => "1994","Color" => "Blanc","KM" => "500000"),
			array("Make" => "Honda","Model" => "Civic Type R","Price" => "14500","Year" => "1994","Color" => "Blanc","KM" => "50000"),
			array("Make" => "Honda","Model" => "Civic Cx","Price" => "500","Year" => "1994","Color" => "Vert","KM" => "500300"),
			array("Make" => "Acura","Model" => "Tl","Price" => "4250","Year" => "2005","Color" => "noir","KM" => "166000"),
			array("Make" => "Acura","Model" => "RSX TYPE-S","Price" => "6500","Year" => "2005","Color" => "noir","KM" => "166000"),
			array("Make" => "Acura","Model" => "Tl TYPE-S","Price" => "8700","Year" => "2008","Color" => "Bleu","KM" => "166000"),
			array("Make" => "Mini","Model" => "Cooper","Price" => "21850","Year" => "2018","Color" => "Brun","KM" => "0"),
			array("Make" => "Mini","Model" => "Cooper S","Price" => "218050","Year" => "1998","Color" => "Brun","KM" => "-00003"),
			array("Make" => "Mini","Model" => "Cooper S","Price" => "21850","Year" => "2008","Color" => "Brun","KM" => "150000"),
			array("Make" => "Jeep","Model" => "Wrangler JL 2P","Price" => "415000","Year" => "2018","Color" => "Noir","KM" => "0"),
			array("Make" => "Jeep","Model" => "Renegade","Price" => "415000","Year" => "2018","Color" => "Noir","KM" => "0"),
			array("Make" => "Dodge","Model" => "Grand-Caravan SE","Price" => "8150","Year" => "2010","Color" => "Rouge","KM" => "100000"),
			array("Make" => "Dodge","Model" => "Viper","Price" => "815000","Year" => "2000","Color" => "Rouge","KM" => "1000"),
			array("Make" => "Dodge","Model" => "Caravan SE","Price" => "850","Year" => "1998","Color" => "Rouge","KM" => "100000"),
			array("Make" => "Volkswagen","Model" => "Jetta","Price" => "8995","Year" => "2015","Color" => "Blanc","KM" => "55000"),
			array("Make" => "Volkswagen","Model" => "Jetta GLS","Price" => "8995","Year" => "2005","Color" => "Noir","KM" => "10000"),
			array("Make" => "Volkswagen","Model" => "GTI","Price" => "8995","Year" => "2005","Color" => "Noir","KM" => "10000"),
			array("Make" => "Toyota","Model" => "Echo","Price" => "250","Year" => "2005","Color" => "Rouille","KM" => "1000000"),
			array("Make" => "Toyota","Model" => "MR2","Price" => "5000","Year" => "1999","Color" => "Rouge","KM" => "100000"),
			array("Make" => "Jeep","Model" => "Grand Cherokee","Price" => "21000","Year" => "2012","Color" => "Bleu","KM" => "35000"),
			array("Make" => "Pontiac","Model" => "Vibe","Price" => "3500","Year" => "2005","Color" => "Orange","KM" => "500000"),
			array("Make" => "Pontiac","Model" => "Vibe","Price" => "3500","Year" => "2005","Color" => "Orange","KM" => "500000"),
			array("Make" => "Pontiac","Model" => "G5","Price" => "4000","Year" => "2005","Color" => "Orange","KM" => "100000"),			array("Make" => "Hyundai","Model" => "Sonata","Price" => "5000","Year" => "2009","Color" => "Noir","KM" => "100000"),
			array("Make" => "Ford","Model" => "F750 Super-Duty Lariat Platium","Price" => "1000000","Year" => "2019","Color" => "Bleu","KM" => "0"),
			array("Make" => "Nissan","Model" => "350Z","Price" => "14500","Year" => "2008","Color" => "Blanc","KM" => "49000"),
			array("Make" => "Nissan","Model" => "370Z","Price" => "24500","Year" => "2017","Color" => "Blanc","KM" => "9000"),
			array("Make" => "Nissan","Model" => "GTR Nismo","Price" => "100000","Year" => "2012","Color" => "Blanc","KM" => "1200"),
			array("Make" => "Mazda","Model" => "RX7","Price" => "20900","Year" => "1994","Color" => "Rouge","KM" => "50000"),
			array("Make" => "Mazda","Model" => "RX8","Price" => "20900","Year" => "2008","Color" => "Rouge","KM" => "5000"),
			array("Make" => "Toyota","Model" => "Supra","Price" => "29000","Year" => "1996","Color" => "Orange","KM" => "24000"),
			array("Make" => "Mercedes-Benz","Model" => "Class-c 2.5","Price" => "7500","Year" => "2008","Color" => "Noir","KM" => "177770"),
			array("Make" => "Mercedes-Benz","Model" => "C63 AMG","Price" => "1000000","Year" => "2009","Color" => "Vert","KM" => "0"),
			array("Make" => "Subaru","Model" => "WRX STI","Price" => "17500","Year" => "2005","Color" => "Bleu","KM" => "4000"),
			array("Make" => "Subaru","Model" => "WRX","Price" => "7500","Year" => "2005","Color" => "Bleu","KM" => "100000"),
			array("Make" => "Subaru","Model" => "Forester","Price" => "4500","Year" => "2007","Color" => "Gris","KM" => "15000"),
			array("Make" => "Cadilac","Model" => "STS V8","Price" => "5980","Year" => "2009","Color" => "Noir","KM" => "188800"),
			array("Make" => "Cadilac","Model" => "CTS","Price" => "10000","Year" => "2009","Color" => "Noir","KM" => "18800"),
			array("Make" => "Cadilac","Model" => "CTS-V","Price" => "20000","Year" => "2009","Color" => "Noir","KM" => "1000"),
			array("Make" => "Ford","Model" => "Explorer","Price" => "32722","Year" => "2016","Color" => "Bleu","KM" => "5000"),
			array("Make" => "Ford","Model" => "Escape","Price" => "15000","Year" => "2015","Color" => "Gris","KM" => "70000"),
			array("Make" => "Mercedes-Benz","Model" => "GLA-Class AWD","Price" => "23298","Year" => "2015","Color" => "Blanc","KM" => "50000"),
			array("Make" => "Mazda","Model" => "3","Price" => "3000","Year" => "2008","Color" => "Rouge","KM" => "131000"),
		);
	
	}
	
	function getMakeList(){
		$tab_cars = getCarList();
		$tab_maker = array();
		foreach ($tab_cars as $value) {
			if (!(in_array($value["Make"],$tab_maker)))
			array_push($tab_maker,$value["Make"]);
		}
		asort($tab_maker);
		return $tab_maker;
	}
	function getModelList($make){
		$tab_cars = getCarList();
		$tab_model = array();
		foreach ($tab_cars as $value) {
			if($value["Make"] == $make){
				if (!(in_array($value["Model"],$tab_model)))
				array_push($tab_model,$value["Model"]);
			}
			
		}
		asort($tab_model);
		return $tab_model;
	}

	function validateMake(){}

	function validateModel(){}
	

?>