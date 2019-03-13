<!-- Page:acceuil.php 
	 Auteur: Thierry Légaré , Vincent Boies
	 Date:Février 2019
-->
<html>
	<head>
		<meta charset="UTF-8">
		<title>Achat de vehicule</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div>
			<div>
				<h1>Achat de vehicule</h1>
				<?php 
					//include 'banner.php';
				?>
				<img src=".." alt="logo">
			</div>
			<div>
				<?php 
					generateDropdownList();
				?>
			</div>
		</div>
	</body>
</html>
