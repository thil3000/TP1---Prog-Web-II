<!-- Page:accueil.php 
	 Auteur: Thierry Legare , Vincent Boies
	 Date:Fevrier 2019
-->
<?php
	function generateMakeList($chosenMake){
		$tab_maker = getMakerList();
		echo "<div class=\"dropdown\">\n";
		echo "<button class=\"dropdownbtn\">$chosenMake</button>\n";
		echo "<div class=\"dropdown-inside\">\n";		
		
		foreach ($tab_maker as $maker) {
			echo "<a href=\"index.php?make=$maker\">$maker</a>\n";	
		}
		
		echo "</div>\n";
		echo "</div>\n";
	}
	
	function generateModelList($make){
		$tab_model = getModelList($make);
		echo "<div class=\"dropdown\">\n";
		echo "<button class=\"dropdownbtn\">Model</button>\n";
		echo "<div class=\"dropdown-inside\">\n";	
		
		foreach ($tab_model as $model) {
			echo "<a href=\"index.php?make=$make&model=$model\">$model</a>\n";	
		}
		
		echo "</div>\n";
		echo "</div>\n";
	}
	
	if(validateMake($make)){
		generateMakeList($make);
		generateModelList($make);
	}
	else{
		generateMakeList(CAR_MAKE);
	}	
?>