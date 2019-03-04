<!-- Page:aceuil.php 
	 Auteur: Thierry Légaré
	 Date:Février 2019
-->

<?php 
	include '../modeles/auto.php';
	include '../vues/acceuil.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Achat de vehicule</title>
		<style>
		a{
			color:black;
		}
		.dropbtn {
			background-color: #4CAF50;
			color: white;
			padding: 16px;
			font-size: 16px;
			border: none;
			cursor: pointer;
		}

		.dropdown {
			position: relative;
			display: inline-block;
		}

		.dropdown-content {
			display: none;
			position: absolute;
			background-color: #f9f9f9;
			min-width: 160px;
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			z-index: 1;
		}

		.dropdown-content a {
			color: black;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
		}

		.dropdown-content a:hover {background-color: #f1f1f1}

		.dropdown:hover .dropdown-content {
			display: block;
		}

		.dropdown:hover .dropbtn {
			background-color: #3e8e41;
		}
		</style>
	</head>
	<body>
		<div>
			<div>
				<h1>Achat de vehicule</h1>
				<img src=".." alt="logo">
			</div>
			<div>
				<div class="dropdown">
					<button class="dropbtn">Make</button>
					<div class="dropdown-content">
						<?php 
							$make = isset($_GET['make']) ? $_GET['make'] : '';
							if($make ==''){
								generateList();
							}
							else{
								echo "ma graine";
							}
						?>
					</div>
				</div>
			</div>
			
		</div>
		
	</body>
</html>

