<!-- Page:index.php 
	 Auteur: Thierry Légaré , Vincent Boies
	 Date:Février 2019
-->

<?php 

	require 'modeles/auto.php';
	
	function generateMakeList($chosenMake){
		$tab_maker = getMakerList();
		echo "<div class=\"dropdown\">\n";
		echo "<button class=\"dropbtn\">$chosenMake</button>\n";
		echo "<div class=\"dropdown-content\">\n";		
		
		foreach ($tab_maker as $maker) {
			echo "<a href=\"index.php?make=$maker\">$maker</a>\n";	
		}
		echo "</div>\n";
		echo "</div>\n";
	}
	
	function generateModelList($make){
		$tab_model = getModelList($make);
		echo "<div class=\"dropdown\">\n";
		echo "<button class=\"dropbtn\">Model</button>\n";
		echo "<div class=\"dropdown-content\">\n";	
		foreach ($tab_model as $model) {
			echo "<a href=\"index.php?make=$make&model=$model\">$model</a>\n";	
		}
		echo "</div>\n";
		echo "</div>\n";
	}
	
	function generateDropdownList(){
		$make = isset($_GET['make']) ? $_GET['make'] : '';
		$model = isset($_GET['model']) ? $_GET['model'] : '';
		if($make == ''){
			generateMakeList("Make");
		}
		else if($model == ''){	//make != ''
			if(validateMake($make)){
				generateMakeList($make);
				generateModelList($make);
			}
		}
		else{	//make && model != ''
			if(validateMake($make) && validateModel($model)){
				header("Location:controller/selectionController.php?make=$make&model=$model");
			}
		}
	}
	
	require 'vues/acceuil.php';
?>