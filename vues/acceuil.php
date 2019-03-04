<!-- Page:aceuil.php 
	 Auteur: Thierry Légaré , Vincent Boies
	 Date:Février 2019
-->

<?php
	function generateList() {
		$tab_maker = getMakeList();
		foreach ($tab_maker as $maker) {
//			echo  $maker;
			echo "<a href=\"index.php?make=$maker\">$maker</a>\n";	
		}
	}
?>
