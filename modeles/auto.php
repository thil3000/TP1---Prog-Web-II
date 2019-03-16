<?php
	define('CAR_MAKE', 'Make');
	define('CAR_MODEL', 'Model');
	define('CAR_PRICE', 'Price');
	define('CAR_YEAR', 'Year');
	define('CAR_COLOR', 'Color');
	define('CAR_KM', 'KM');
	define('CAR_IMAGE', 'Image');
	
	function getCarList() {
		return $tab_cars = array(
					array("Make" => "Honda","Model" => "Civic Dx","Price" => "450","Year" => "1994","Color" => "Blanc","KM" => "500000","Image" => "modeles/carImg/CivicDX1.jpg"),
					array("Make" => "Honda","Model" => "Civic Dx","Price" => "10000","Year" => "2006","Color" => "Bleu","KM" => "40000","Image" => "modeles/carImg/CivicDX2.jpg"),
					array("Make" => "Honda","Model" => "Civic Type R","Price" => "14500","Year" => "1994","Color" => "Blanc","KM" => "50000","Image" => "modeles/carImg/CivicR1.jpg"),
					array("Make" => "Honda","Model" => "Civic Type R","Price" => "26500","Year" => "2015","Color" => "Rouge","KM" => "5600","Image" => "modeles/carImg/CivicR2.jpg"),
					array("Make" => "Honda","Model" => "Civic Type R","Price" => "50000","Year" => "2017","Color" => "Rouge","KM" => "1500","Image" => "modeles/carImg/CivicR3.jpg"),
					array("Make" => "Honda","Model" => "Civic Cx","Price" => "500","Year" => "1994","Color" => "Vert","KM" => "500300","Image" => "modeles/carImg/CivicCX1.jpg"),
					array("Make" => "Acura","Model" => "Tl","Price" => "4250","Year" => "2005","Color" => "Noir","KM" => "166000","Image" => "modeles/carImg/AcuraTL1.jpg"),
					array("Make" => "Acura","Model" => "RSX TYPE-S","Price" => "6500","Year" => "2005","Color" => "Noir","KM" => "166000","Image" => "modeles/carImg/AcuraRSXS1.jpg"),
					array("Make" => "Acura","Model" => "RSX TYPE-S","Price" => "7500","Year" => "2007","Color" => "Bleu","KM" => "16000","Image" => "modeles/carImg/AcuraRSXS2.jpg"),
					array("Make" => "Acura","Model" => "Tl TYPE-S","Price" => "8700","Year" => "2008","Color" => "Bleu","KM" => "166000","Image" => "modeles/carImg/AcuraTLS1.jpg"),
					array("Make" => "Mini","Model" => "Cooper","Price" => "21850","Year" => "2018","Color" => "Brun","KM" => "0","Image" => "modeles/carImg/MiniC1.jpg"),
					array("Make" => "Mini","Model" => "Cooper r","Price" => "218050","Year" => "1998","Color" => "Brun","KM" => "-00003","Image" => "modeles/carImg/MiniCR1.jpg"),
					array("Make" => "Mini","Model" => "Cooper S","Price" => "21850","Year" => "2008","Color" => "Brun","KM" => "150000","Image" => "modeles/carImg/MiniCS1.jpg"),
					array("Make" => "Mini","Model" => "Cooper S","Price" => "18850","Year" => "2007","Color" => "Noir","KM" => "16000","Image" => "modeles/carImg/MiniCS2.jpg"),
					array("Make" => "Jeep","Model" => "Wrangler JL 2P","Price" => "415000","Year" => "2018","Color" => "Noir","KM" => "0","Image" => "modeles/carImg/JeepW1.jpg"),
					array("Make" => "Jeep","Model" => "Renegade","Price" => "415000","Year" => "2018","Color" => "Noir","KM" => "0","Image" => "modeles/carImg/JeepR1.jpg"),
					array("Make" => "Dodge","Model" => "Grand-Caravan SE","Price" => "8150","Year" => "2010","Color" => "Rouge","KM" => "100000","Image" => "modeles/carImg/DodgeGCSE1.jpg"),
					array("Make" => "Dodge","Model" => "Viper","Price" => "815000","Year" => "2000","Color" => "Rouge","KM" => "1000","Image" => "modeles/carImg/DodgeViper1.jpg"),
					array("Make" => "Dodge","Model" => "Caravan SE","Price" => "850","Year" => "1998","Color" => "Rouge","KM" => "100000","Image" => "modeles/carImg/DodgeCSE1.jpg"),
					array("Make" => "Volkswagen","Model" => "Jetta","Price" => "8995","Year" => "2015","Color" => "Blanc","KM" => "55000","Image" => "modeles/carImg/VolksJ1.jpg"),
					array("Make" => "Volkswagen","Model" => "Jetta GLS","Price" => "8995","Year" => "2005","Color" => "Noir","KM" => "10000","Image" => "modeles/carImg/VolksJGLS1.jpg"),
					array("Make" => "Volkswagen","Model" => "GTI","Price" => "8995","Year" => "2005","Color" => "Noir","KM" => "10000","Image" => "modeles/carImg/VolksGTI1.jpg"),
					array("Make" => "Toyota","Model" => "Echo","Price" => "250","Year" => "2005","Color" => "Rouille","KM" => "1000000","Image" => "modeles/carImg/ToyotaEcho1.jpg"),
					array("Make" => "Toyota","Model" => "MR2","Price" => "5000","Year" => "1999","Color" => "Rouge","KM" => "100000","Image" => "modeles/carImg/ToyotaMR21.jpg"),
					array("Make" => "Jeep","Model" => "Grand Cherokee","Price" => "21000","Year" => "2012","Color" => "Bleu","KM" => "35000","Image" => "modeles/carImg/JeepGC1.jpg"),
					array("Make" => "Jeep","Model" => "Grand Cherokee","Price" => "30000","Year" => "2018","Color" => "Noir","KM" => "5000","Image" => "modeles/carImg/JeepGC2.jpg"),
					array("Make" => "Pontiac","Model" => "Vibe","Price" => "3500","Year" => "2005","Color" => "Orange","KM" => "500000","Image" => "modeles/carImg/PontiacVibe1.jpg"),
					array("Make" => "Pontiac","Model" => "Vibe gs","Price" => "3500","Year" => "2005","Color" => "Orange","KM" => "500000","Image" => "modeles/carImg/PontiacVibGS1.jpg"),
					array("Make" => "Pontiac","Model" => "G5","Price" => "4000","Year" => "2005","Color" => "Orange","KM" => "100000","Image" => "modeles/carImg/PontiacG51.jpg"),			
					array("Make" => "Hyundai","Model" => "Sonata","Price" => "5000","Year" => "2009","Color" => "Noir","KM" => "100000","Image" => "modeles/carImg/HyundaiS1.jpg"),
					array("Make" => "Ford","Model" => "F750 Super-Duty Lariat Platium","Price" => "1000000","Year" => "2019","Color" => "Bleu","KM" => "0","Image" => "modeles/carImg/FordF7501.jpg"),
					array("Make" => "Nissan","Model" => "350Z","Price" => "14500","Year" => "2008","Color" => "Blanc","KM" => "49000","Image" => "modeles/carImg/Nissan350Z1.jpg"),
					array("Make" => "Nissan","Model" => "370Z","Price" => "24500","Year" => "2017","Color" => "Blanc","KM" => "9000","Image" => "modeles/carImg/Nissan370Z1.jpg"),
					array("Make" => "Nissan","Model" => "GTR Nismo","Price" => "100000","Year" => "2012","Color" => "Blanc","KM" => "1200","Image" => "modeles/carImg/NissanGTR1.jpg"),
					array("Make" => "Mazda","Model" => "RX7","Price" => "20900","Year" => "1994","Color" => "Rouge","KM" => "50000","Image" => "modeles/carImg/MazdaRX71.jpg"),
					array("Make" => "Mazda","Model" => "RX8","Price" => "20900","Year" => "2008","Color" => "Rouge","KM" => "5000","Image" => "modeles/carImg/MazdaRX81.jpg"),
					array("Make" => "Toyota","Model" => "Supra","Price" => "29000","Year" => "1996","Color" => "Orange","KM" => "24000","Image" => "modeles/carImg/ToyotaS1.jpg"),
					array("Make" => "Mercedes-Benz","Model" => "Class-c 2.5","Price" => "7500","Year" => "2008","Color" => "Noir","KM" => "177770","Image" => "modeles/carImg/MercedesClassC1.jpg"),
					array("Make" => "Mercedes-Benz","Model" => "C63 AMG","Price" => "1000000","Year" => "2009","Color" => "Vert","KM" => "0","Image" => "modeles/carImg/MercedesC631.jpg"),
					array("Make" => "Subaru","Model" => "WRX STI","Price" => "17500","Year" => "2005","Color" => "Bleu","KM" => "4000","Image" => "modeles/carImg/SubaruWRXSTI1.jpg"),
					array("Make" => "Subaru","Model" => "WRX","Price" => "7500","Year" => "2005","Color" => "Bleu","KM" => "100000","Image" => "modeles/carImg/SubaruWRX1.jpg"),
					array("Make" => "Subaru","Model" => "Forester","Price" => "4500","Year" => "2007","Color" => "Gris","KM" => "15000","Image" => "modeles/carImg/SubaruFores1.jpg"),
					array("Make" => "Cadilac","Model" => "STS V8","Price" => "5980","Year" => "2009","Color" => "Noir","KM" => "188800","Image" => "modeles/carImg/CadilacSTS1.jpg"),
					array("Make" => "Cadilac","Model" => "CTS","Price" => "10000","Year" => "2009","Color" => "Noir","KM" => "18800","Image" => "modeles/carImg/CadilacCTS1.jpg"),
					array("Make" => "Cadilac","Model" => "CTS-V","Price" => "20000","Year" => "2009","Color" => "Noir","KM" => "1000","Image" => "modeles/carImg/CadilacCTSV1.jpg"),
					array("Make" => "Ford","Model" => "Explorer","Price" => "32722","Year" => "2016","Color" => "Bleu","KM" => "5000","Image" => "modeles/carImg/FordExplorer1.jpg"),
					array("Make" => "Ford","Model" => "Escape","Price" => "15000","Year" => "2015","Color" => "Gris","KM" => "70000","Image" => "modeles/carImg/FordEscape1.jpg"),
					array("Make" => "Mercedes-Benz","Model" => "GLA-Class AWD","Price" => "23298","Year" => "2015","Color" => "Blanc","KM" => "50000","Image" => "modeles/carImg/MercedesGLA1.jpg"),
					array("Make" => "Mazda","Model" => "3","Price" => "3000","Year" => "2008","Color" => "Rouge","KM" => "131000","Image" => "modeles/carImg/Mazda31.jpg"),
					array("Make" => "Hyundai","Model" => "Sonata s","Price" => "50002","Year" => "2019","Color" => "Noir","KM" => "0","Image" => "modeles/carImg/HyundaiSS1.jpg"),
					array("Make" => "Hyundai","Model" => "Sonata r","Price" => "53000","Year" => "1999","Color" => "Noir","KM" => "90000","Image" => "modeles/carImg/HyundaiSR1.jpg"),
				);
	}
		
	function makeListOf($string,$make){
		$tab_cars = getCarList();
		$tab_result = array();
		foreach ($tab_cars as $value){
			if($value[CAR_MAKE] == $make || is_null($make))
			array_push($tab_result,$value[$string]);
		}
		return $tab_result;
	}
	
	function getMakerList(){
		$tab_list = makeListOf(CAR_MAKE,NULL);
		asort($tab_list);
		return array_unique($tab_list);
	}

	function getYearList(){
		$tab_list = makeListOf(CAR_YEAR,NULL);
		asort($tab_list);
		return array_unique($tab_list);
	}

	function getColorList(){
		$tab_list = makeListOf(CAR_COLOR,NULL);
		asort($tab_list);
		return array_unique($tab_list);
	}
	
	function getModelList($make){
		if(validateMake($make)){
			$tab_list = makeListOf(CAR_MODEL,$make);
			asort($tab_list);
			return array_unique($tab_list);
		};
	}
	
	function getCarFromId($car_id) {
		return getCarList()[$car_id];
	}
	
	function getCarsFromMakeModel($make,$model){
		$tab_result = array();
		if (validateMakeAndModel($make,$model)){
			$tab_cars = getCarList();
			foreach($tab_cars as $key => $car){
				if($car[CAR_MAKE] == $make && $car[CAR_MODEL] == $model){
					array_push($tab_result, $key);
				}
			}
			return $tab_result;
		}
		return false;
	}
		
	function validateMake($makeToValidate){
		$tab_maker = getMakerList();
		if (strpos($makeToValidate, '%20'))
		str_replace('%20', ' ', $makeToValidate);

		if(in_array($makeToValidate,$tab_maker,true)){
			return true;
		}
		return false;
	}
	
	function validateMakeAndModel($make,$model){
		$tab_cars = getCarList();
		foreach($tab_cars as $value){
			if($value[CAR_MAKE] == $make && $value[CAR_MODEL] == $model){
				return true;
			}
		}
		return false;
	}
?>