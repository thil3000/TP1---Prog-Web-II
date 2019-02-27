<?php
	function generateList() {
		$tab_maker = getMakeList();
		foreach ($tab_maker as $maker) {
//			echo  $maker;
			echo "<a href=\"index.php?make=$maker\">$maker</a>\n";	
		}
	}
?>
