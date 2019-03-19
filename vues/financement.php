<!-- Page:financement.php 
	 Auteur: Thierry Légaré , Vincent Boies
	 Date:Février 2019
-->
	<?php
		include "selection.php";
		show_all_car(array($car_id));
	?>
<div class="financement">
	<form action="../controller/financement_controller.php?car_id=<?php echo $car_id?>" method="post">
		<select name="duration">
			<option value="12" <?php if($duration_in_months==12) echo "selected=\"selected\"" ?> >12 mois 6.95% - 7.25%</option>
			<option value="24" <?php if($duration_in_months==24) echo "selected=\"selected\"" ?> >24 mois 6.95% - 7.25%</option>
			<option value="36" <?php if($duration_in_months==36) echo "selected=\"selected\"" ?> >36 mois 6.25% - 6.30%</option>
			<option value="48" <?php if($duration_in_months==48) echo "selected=\"selected\"" ?> >48 mois 6.10% - 6.30%</option>
			<option value="60" <?php if($duration_in_months==60) echo "selected=\"selected\"" ?> >60 mois 6.00% - 5.85%</option>
		</select><br>
		<label for="account">Account (Arondir au dollard prêt): </label><input type="text" name="account" value="<?php echo $account ?>"><br>
		<input type="submit" value="Calculer">
	</form>

	<?php
		foreach ($tab_total as $key => $value) {
			echo $key . ": " . number_format($value,2) . "$<br>";
		} 
	?>
</div>