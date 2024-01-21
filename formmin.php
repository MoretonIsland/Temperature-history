<!-- Formulář pro výběr roku -->
<form action="mintemp.php" method="get">

<label for="selectedYear">Select year:</label>
<select name="selectedYear" id="selectedYear">

<?php
// Přímý výpis konkrétních hodnot
echo "<option value=\"1948\">1948</option>";
echo "<option value=\"1949\">1949</option>";
echo "<option value=\"1950\">1950</option>";
echo "<option value=\"1953\">1953</option>";
echo "<option value=\"1955\">1955</option>";
echo "<option value=\"1960\">1960</option>";
echo "<option value=\"1963\">1963</option>";
echo "<option value=\"1965\">1965</option>";
echo "<option value=\"1970\">1970</option>";
echo "<option value=\"1973\">1973</option>";
echo "<option value=\"1975\">1975</option>";
echo "<option value=\"1980\">1980</option>";
echo "<option value=\"1983\">1983</option>";
echo "<option value=\"1985\">1985</option>";
echo "<option value=\"1990\">1990</option>";
echo "<option value=\"1993\">1993</option>";
echo "<option value=\"1995\">1995</option>";
echo "<option value=\"2000\">2000</option>";
echo "<option value=\"2003\">2003</option>";
echo "<option value=\"2005\">2005</option>";
echo "<option value=\"2010\">2010</option>";
echo "<option value=\"2013\">2013</option>";
echo "<option value=\"2015\">2015</option>";
echo "<option value=\"2018\">2018</option>";
echo "<option value=\"2019\">2019</option>";
echo "<option value=\"2020\">2020</option>";
echo "<option value=\"2021\">2021</option>";
echo "<option value=\"2022\">2022</option>";
echo "<option value=\"2023\">2023</option>";
?>
</select>
<input type="submit" value="Submit">
</form>
