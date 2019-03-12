<!-- Page:auto.php 
	 Auteur: Thierry Légaré , Vincent Boies
	 Date:Février 2019
-->

<?php


	function getCarList() {
		return $tab_cars = array(
					0=>array("Make" => "Honda","Model" => "Civic Dx","Price" => "450","Year" => "1994","Color" => "Blanc","KM" => "500000"),
					1=>array("Make" => "Honda","Model" => "Civic Type R","Price" => "14500","Year" => "1994","Color" => "Blanc","KM" => "50000"),
					2=>array("Make" => "Honda","Model" => "Civic Cx","Price" => "500","Year" => "1994","Color" => "Vert","KM" => "500300"),
					3=>array("Make" => "Acura","Model" => "Tl","Price" => "4250","Year" => "2005","Color" => "noir","KM" => "166000"),
					4=>array("Make" => "Acura","Model" => "RSX TYPE-S","Price" => "6500","Year" => "2005","Color" => "noir","KM" => "166000"),
					5=>array("Make" => "Acura","Model" => "Tl TYPE-S","Price" => "8700","Year" => "2008","Color" => "Bleu","KM" => "166000"),
					6=>array("Make" => "Mini","Model" => "Cooper","Price" => "21850","Year" => "2018","Color" => "Brun","KM" => "0"),
					7=>array("Make" => "Mini","Model" => "Cooper r","Price" => "218050","Year" => "1998","Color" => "Brun","KM" => "-00003"),
					8=>array("Make" => "Mini","Model" => "Cooper S","Price" => "21850","Year" => "2008","Color" => "Brun","KM" => "150000"),
					9=>array("Make" => "Jeep","Model" => "Wrangler JL 2P","Price" => "415000","Year" => "2018","Color" => "Noir","KM" => "0"),
					10=>array("Make" => "Jeep","Model" => "Renegade","Price" => "415000","Year" => "2018","Color" => "Noir","KM" => "0"),
					11=>array("Make" => "Dodge","Model" => "Grand-Caravan SE","Price" => "8150","Year" => "2010","Color" => "Rouge","KM" => "100000"),
					12=>array("Make" => "Dodge","Model" => "Viper","Price" => "815000","Year" => "2000","Color" => "Rouge","KM" => "1000"),
					13=>array("Make" => "Dodge","Model" => "Caravan SE","Price" => "850","Year" => "1998","Color" => "Rouge","KM" => "100000"),
					14=>array("Make" => "Volkswagen","Model" => "Jetta","Price" => "8995","Year" => "2015","Color" => "Blanc","KM" => "55000"),
					15=>array("Make" => "Volkswagen","Model" => "Jetta GLS","Price" => "8995","Year" => "2005","Color" => "Noir","KM" => "10000"),
					16=>array("Make" => "Volkswagen","Model" => "GTI","Price" => "8995","Year" => "2005","Color" => "Noir","KM" => "10000"),
					17=>array("Make" => "Toyota","Model" => "Echo","Price" => "250","Year" => "2005","Color" => "Rouille","KM" => "1000000"),
					18=>array("Make" => "Toyota","Model" => "MR2","Price" => "5000","Year" => "1999","Color" => "Rouge","KM" => "100000"),
					19=>array("Make" => "Jeep","Model" => "Grand Cherokee","Price" => "21000","Year" => "2012","Color" => "Bleu","KM" => "35000"),
					20=>array("Make" => "Pontiac","Model" => "Vibe","Price" => "3500","Year" => "2005","Color" => "Orange","KM" => "500000"),
					21=>array("Make" => "Pontiac","Model" => "Vibe gs","Price" => "3500","Year" => "2005","Color" => "Orange","KM" => "500000"),
					22=>array("Make" => "Pontiac","Model" => "G5","Price" => "4000","Year" => "2005","Color" => "Orange","KM" => "100000"),			
					23=>array("Make" => "Hyundai","Model" => "Sonata","Price" => "5000","Year" => "2009","Color" => "Noir","KM" => "100000"),
					24=>array("Make" => "Ford","Model" => "F750 Super-Duty Lariat Platium","Price" => "1000000","Year" => "2019","Color" => "Bleu","KM" => "0"),
					25=>array("Make" => "Nissan","Model" => "350Z","Price" => "14500","Year" => "2008","Color" => "Blanc","KM" => "49000"),
					26=>array("Make" => "Nissan","Model" => "370Z","Price" => "24500","Year" => "2017","Color" => "Blanc","KM" => "9000"),
					27=>array("Make" => "Nissan","Model" => "GTR Nismo","Price" => "100000","Year" => "2012","Color" => "Blanc","KM" => "1200"),
					28=>array("Make" => "Mazda","Model" => "RX7","Price" => "20900","Year" => "1994","Color" => "Rouge","KM" => "50000"),
					29=>array("Make" => "Mazda","Model" => "RX8","Price" => "20900","Year" => "2008","Color" => "Rouge","KM" => "5000"),
					30=>array("Make" => "Toyota","Model" => "Supra","Price" => "29000","Year" => "1996","Color" => "Orange","KM" => "24000"),
					31=>array("Make" => "Mercedes-Benz","Model" => "Class-c 2.5","Price" => "7500","Year" => "2008","Color" => "Noir","KM" => "177770"),
					32=>array("Make" => "Mercedes-Benz","Model" => "C63 AMG","Price" => "1000000","Year" => "2009","Color" => "Vert","KM" => "0"),
					33=>array("Make" => "Subaru","Model" => "WRX STI","Price" => "17500","Year" => "2005","Color" => "Bleu","KM" => "4000"),
					34=>array("Make" => "Subaru","Model" => "WRX","Price" => "7500","Year" => "2005","Color" => "Bleu","KM" => "100000"),
					35=>array("Make" => "Subaru","Model" => "Forester","Price" => "4500","Year" => "2007","Color" => "Gris","KM" => "15000"),
					36=>array("Make" => "Cadilac","Model" => "STS V8","Price" => "5980","Year" => "2009","Color" => "Noir","KM" => "188800"),
					37=>array("Make" => "Cadilac","Model" => "CTS","Price" => "10000","Year" => "2009","Color" => "Noir","KM" => "18800"),
					38=>array("Make" => "Cadilac","Model" => "CTS-V","Price" => "20000","Year" => "2009","Color" => "Noir","KM" => "1000"),
					39=>array("Make" => "Ford","Model" => "Explorer","Price" => "32722","Year" => "2016","Color" => "Bleu","KM" => "5000"),
					40=>array("Make" => "Ford","Model" => "Escape","Price" => "15000","Year" => "2015","Color" => "Gris","KM" => "70000"),
					41=>array("Make" => "Mercedes-Benz","Model" => "GLA-Class AWD","Price" => "23298","Year" => "2015","Color" => "Blanc","KM" => "50000"),
					42=>array("Make" => "Mazda","Model" => "3","Price" => "3000","Year" => "2008","Color" => "Rouge","KM" => "131000"),
					43=>array("Make" => "Hyundai","Model" => "Sonata s","Price" => "50002","Year" => "2019","Color" => "Noir","KM" => "0"),
					44=>array("Make" => "Hyundai","Model" => "Sonata r","Price" => "53000","Year" => "1999","Color" => "Noir","KM" => "90000"),
				);
	}
		
	function makeListOf($string,$make){
		$tab_cars = getCarList();
		$tab_result = array();
		foreach ($tab_cars as $value){
			if($value["Make"] == $make || is_null($make))
			array_push($tab_result,$value[$string]);
		}
		return $tab_result;
	}
	
	function getMakerList(){
		$tab_list = makeListOf("Make",NULL);
		asort($tab_list);
		return array_unique($tab_list);
	}

	function getYearList(){
		$tab_list = makeListOf("Year",NULL);
		asort($tab_list);
		return array_unique($tab_list);
	}

	function getColorList(){
		$tab_list = makeListOf("Color",NULL);
		asort($tab_list);
		return array_unique($tab_list);
	}
	
	function getModelList($make){
		if(validateMake($make)){
			$tab_list = makeListOf("Model",$make);
			asort($tab_list);
			return array_unique($tab_list);
		};
	}
	
	function getCars($make,$model){
		$tab_result = null;
		if(validateMake($make) && validateModel($model)){
			$tab_cars = getModelList($make);
			foreach($tab_cars as $value){
				if($value["Make"] == $make && $value["Model"] == $model){
					array_push($value);
				}
			}
		}
		return $tab_result;
	}
	
	function validateMake($make){
		$isInArray = false;
		$tab_cars = getCarList();
		if (strpos($make, '%20'))
		str_replace('%20', ' ', $make);
		foreach ($tab_cars as $value){
			if(in_array($make,$value,true)){
				$isInArray = true;
			}
			
		}
		return $isInArray;
	};
		
		
	

	function validateModel($model){
		$isInArray = false;
		$tab_cars = getCarList();
		if (strpos($model, '%20'))
		str_replace('%20', ' ', $model);
		foreach ($tab_cars as $value){
			if(in_array($model,$value,true)){
				$isInArray = true;
			}
			
		}
		return $isInArray;
	}
?>