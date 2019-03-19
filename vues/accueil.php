<!-- Page:accueil.php 
	 Auteur: Thierry Legare , Vincent Boies
	 Date:Fevrier 2019
-->
<?php
	function generate_make_dropdown($chosen_make){
		$tab_maker = get_maker_list();
		echo "<div class=\"dropdown\">\n";
		echo "<button class=\"dropdownbtn\">$chosen_make</button>\n";
		echo "<div class=\"dropdown-inside\">\n";		
		
		foreach ($tab_maker as $maker) {
			echo "<a href=\"index.php?make=$maker\">$maker</a>\n";	
		}
		
		echo "</div>\n";
		echo "</div>\n";
	}
	
	function generate_model_dropdown($make){
		$tab_model = get_model_list($make);
		echo "<div class=\"dropdown\">\n";
		echo "<button class=\"dropdownbtn\">Modèles</button>\n";
		echo "<div class=\"dropdown-inside\">\n";	
		
		foreach ($tab_model as $model) {
			echo "<a href=\"index.php?make=$make&model=$model\">$model</a>\n";	
		}
		
		echo "</div>\n";
		echo "</div>\n";
	}
	
	echo "<div id=\"dropdowndiv\">\n";
	if(validate_make($make)){
		generate_make_dropdown($make);
		generate_model_dropdown($make);
	}
	else{
		generate_make_dropdown("Marques");
	}	
	echo "</div>\n";
?>