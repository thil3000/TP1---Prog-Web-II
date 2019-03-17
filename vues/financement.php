<!-- Page:financement.php 
	 Auteur: Thierry Légaré , Vincent Boies
	 Date:Février 2019
-->
<form action="../controller/financementController.php" method="post">
	<select>
		<option value="12" <?php getSelectedMonth()?>>12 mois 6.95% - 7.25%</option>
		<option value="24" <?php getSelectedMonth()?>>24 mois 6.95% - 7.25%</option>
		<option value="36" <?php getSelectedMonth()?>>36 mois 6.25% - 6.30%</option>
		<option value="48" <?php getSelectedMonth()?>>48 mois 6.10% - 6.30%</option>
		<option value="60" <?php getSelectedMonth()?>>60 mois 6.00% - 5.85%</option>
	</select><br>
	Account: <input type="text" name="account" value="<?php echo $account?>"><br>
	<input type="submit">
</form>

<?php
echo $account;
echo $carValue
?>