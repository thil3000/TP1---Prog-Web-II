<!-- Page:financement.php 
	 Auteur: Thierry Légaré , Vincent Boies
	 Date:Février 2019
-->
<form action="../controller/financementController.php?carID=<?php echo $carID?>" method="post">
	<select name="duration">
		<option value="12" <?php if($durationInMonths==12) echo 'selected="selected"' ?> >12 mois 6.95% - 7.25%</option>
		<option value="24" <?php if($durationInMonths==24) echo 'selected="selected"' ?> >24 mois 6.95% - 7.25%</option>
		<option value="36" <?php if($durationInMonths==36) echo 'selected="selected"' ?> >36 mois 6.25% - 6.30%</option>
		<option value="48" <?php if($durationInMonths==48) echo 'selected="selected"' ?> >48 mois 6.10% - 6.30%</option>
		<option value="60" <?php if($durationInMonths==60) echo 'selected="selected"' ?> >60 mois 6.00% - 5.85%</option>
	</select><br>
	Account: <input type="text" name="account" value="<?php echo $account?>"><br>
	<input type="submit">
</form>
<?php
	
?>
