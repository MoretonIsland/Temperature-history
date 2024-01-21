<!-- Formulář pro výběr roku -->
<form action="avgtemp.php" method="get">

<label for="selectedYear">Select year:</label>
<select name="selectedYear" id="selectedYear">

<?php
// Přímý výpis konkrétních hodnot 
for ($year = 1948; $year <= 2023; $year++) {
    echo "<option value=\"$year\">$year</option>";
}
?>
</select>
        
<input type="submit" value="Submit">
</form>
