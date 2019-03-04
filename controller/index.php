<!-- Page:aceuil.php 
	 Auteur: Thierry Légaré , Vincent Boies
	 Date:Février 2019
-->

<?php 
	include '../modeles/auto.php';
?>

<?php
	function generateMakeList() {
		$tab_maker = getMakeList();
		foreach ($tab_maker as $maker) {
			echo "<a href=\"index.php?make=$maker\">$maker</a>\n";	
		}
	}
	
	function generateModelList($make){
		$tab_model = getModelList($make);
		foreach ($tab_model as $model) {
			echo "<a href=\"index.php?model=$model\">$model</a>\n";	
		}
	}
	
	function generateDropdownList(){
		$make = isset($_GET['make']) ? $_GET['make'] : '';
		$model = isset($_GET['model']) ? $_GET['model'] : '';
		if($make ==''){
			generateMakeList();
		}
		elseif($model == ''){
			generateModelList($make);
		}
		else{
			getCarSearchResult($make,$model)
		}
	}
	
	include '../vues/acceuil.php';
?>