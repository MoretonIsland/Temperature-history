<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="chart3.js"></script>
    <script src="chart4.js"></script>

</head>

<style>
canvas {
    display: block;
    margin: 60px auto; /* Přidání mezery nad grafy */
    width: 60vw; /* Nastavení šířky na 60% šířky okna prohlížeče */
    
}

#yearRange {
        color:black;  /*barva tohoto nápisu 1948 - 2023*/
}

#Average {
   text-decoration: underline; /*podtržení nadpisu h2 */
}

.sidebar {
    background-color:#87CEEB ; /* barva pro postranní panel */ 
}

th {
    background-color:#ED2939; /* barva pro záhlaví tabulky */  
    color: #FFFFFF;

/*
body {
    background-image: url('sky22.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: repeat;
}
*/
}
.back-link {             /* Tlačítko Home - zpět na Home page - vlevo nahoře */    
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
<h2 id="Average">Maximum temperature</h2>
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

<?php include 'formmax.php'; ?>

<?php 
// Začlenění souboru třídy */
require_once 'MaxResult.php';

// Získání vybraného roku a měsíce z URL parametru */
$selectedYear = isset($_GET['selectedYear']) ? $_GET['selectedYear'] : date('Y');
$selectedMonth = isset($_GET['selectedMonth']) ? $_GET['selectedMonth'] : 'December';

// Vytvoření instanci třídy AvgResultAnalysis */
$MaxResultAnalysis = new MaxResultAnalysis();

// Získání teplotních dat pro vybraný rok a měsíc */
$temperatureData = $MaxResultAnalysis->getTemperatureData($selectedYear, $selectedMonth);

// Zobrazení teplotních dat */
$MaxResultAnalysis->displayTemperatureData($temperatureData);
?>
<!-- Canvas prvek pro graf s identifikátorem (id) -->
<canvas id="myChart3"></canvas>
<canvas id="myChart4"></canvas>
<br>
</body>
</html>
