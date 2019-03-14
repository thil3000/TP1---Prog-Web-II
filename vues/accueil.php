<!-- Page:accueil.php 
	 Auteur: Thierry Legare , Vincent Boies
	 Date:Fevrier 2019
-->
<?php
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
?>

<div>
	<div>
		<h1>Achat de vehicule</h1>
		<a href="index.php">test</a>
	</div>
	<div>
		<?php 
			if(validateMake($make)){
				generateMakeList($make);
				generateModelList($make);
			}
			else{
				generateMakeList("Make");
			}	
		?>
	</div>
</div>
