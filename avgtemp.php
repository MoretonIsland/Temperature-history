<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="chart.js"></script>
    <script src="chart2.js"></script>   
</head>

<style>

canvas {
    display: block;
    margin: 60px auto; /* Přidání mezery nad grafy */
    width: 65vw; /* Nastavení šířky na 60% šířky okna prohlížeče */
}

#yearRange {
        color:black; /*barva nápisu 1948 - 2023*/
}

#Average {
   text-decoration: underline; /*podtržení nadpisu h2 */
}
.sidebar {
    background-color:#87CEEB; /* Barva pro postranní panel */
}

th {
    background-color:#ED2939; /* Barva pro záhlaví tabulky */
    color: #FFFFFF;
}
.back-link {         /* Tlačítko Home - zpět na Home page - umístění vlevo nahoře */
    position: absolute;
    top: 10px;
    left: 50px;
    color: blue;
    text-decoration: none;
}

</style>

<body>
<a href="home.php" class="back-link">Home</a>

<div class="content">
<h2 id="Average">Average temperature</h2>
<p id="yearRange">1948 - 2023</p>
</div>
<br>

<div class="sidebar"></div>

<h2><img src='sky25.jpg'  alt= 'sky.jpg'style="float:left;width:50px;height:43px;">
</h2>
<h2><img src='sky25.jpg'  alt= 'sky.jpg'style="float:left;width:50px;height:43px;">
</h2>

<?php
// Počet obrázků k zobrazení 
$numberOfImages = 9;
?>

<?php for ($i = 0; $i < $numberOfImages; $i++): ?>
    <h2><img src='sky25.jpg'  alt='sky.jpg' style="float:right;width:50px;height:43px;"></h2>
<?php endfor; ?>

<?php include 'formavg.php'; ?>

<?php 
// Začlenění souboru třídy 
require_once 'AvgResult.php';

// Získání vybraného roku a měsíce z URL parametru 
$selectedYear = isset($_GET['selectedYear']) ? $_GET['selectedYear'] : date('Y');
$selectedMonth = isset($_GET['selectedMonth']) ? $_GET['selectedMonth'] : 'December';

// Vytvoření instanci třídy AvgResultAnalysis 
$AvgResultAnalysis = new AvgResultAnalysis();

// Získání teplotní data pro vybraný rok a měsíc 
$temperatureData = $AvgResultAnalysis->getTemperatureData($selectedYear, $selectedMonth);

// Zobrazení teplotních dat 
$AvgResultAnalysis->displayTemperatureData($temperatureData);
?>
<!-- Canvas prvek pro graf s identifikátorem (id) -->
<canvas id="myChart2"></canvas> 
<canvas id="myChart"></canvas>
<br>
</body>
</html>
