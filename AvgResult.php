<?php
/* 
Třída AvgResultAnalysis provádí analýzu a zobrazení průměrných teplotních dat.
*/
class AvgResultAnalysis {
     /*
    Metoda getTemperatureData získává teplotní data pro vybraný rok nebo vrátí všechna data, pokud není vybrán žádný rok.
    */
    public function getTemperatureData($selectedYear) {
        /* Zahrnutí souboru s teplotními daty */
        $temperatureData = require 'avgdatas.php';

        /* Pokud není vybrán žádný rok, vrátí všechna data */
        if (empty($selectedYear)) {
            return $this->transformData($temperatureData);
        }

        /* Filtrování dat pouze pro vybraný rok */
        $filteredData = [];
        foreach ($temperatureData as $dateAbbreviation => $yearTemperature) {
            $year = key($yearTemperature);
            if ($year == $selectedYear) {
                $filteredData[$dateAbbreviation] = $yearTemperature;
            }
        }

        return $this->transformData($filteredData);
    }
        /* 
    Metoda displayTemperatureData zobrazuje teplotní data ve formě tabulky.
    */
    public function displayTemperatureData($temperatureData) {
        echo '<table>';
        echo '<tr><th>Month year</th><th>Average temperature</th></tr>';
        foreach ($temperatureData as $dateAbbreviation => $yearTemperature) {
            $year = key($yearTemperature);
            $averageTemperature = current($yearTemperature);
            echo "<tr><td>$dateAbbreviation</td><td>$averageTemperature °C</td></tr>";
        }
        echo '</table>';
    }
       /* 
    Privátní metoda transformData transformuje teplotní data do požadovaného formátu.
    */
    private function transformData($temperatureData) {
        $transformedData = [];

        foreach ($temperatureData as $dateAbbreviation => $yearTemperature) {
            $year = key($yearTemperature);
            $averageTemperature = $this->calculateAverageTemperature($yearTemperature);
            $transformedData[$dateAbbreviation] = [$year => $averageTemperature];
        }

        return $transformedData;
    }
        /* 
    Privátní metoda calculateAverageTemperature vypočítává průměrnou teplotu ze zadaných teplot.
    */
    private function calculateAverageTemperature($temperatures) {
        $totalTemperature = array_sum($temperatures);
        $numberOfDays = count($temperatures);
        $averageTemperature = round($totalTemperature / $numberOfDays, 2);
        return $averageTemperature;
    } 
}
?>
