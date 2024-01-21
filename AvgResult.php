<?php

class AvgResultAnalysis {
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
        /* Zobrazení teplotních dat ve formě tabulky */
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
       /* Transformování teplotních dat */
    private function transformData($temperatureData) {
        $transformedData = [];

        foreach ($temperatureData as $dateAbbreviation => $yearTemperature) {
            $year = key($yearTemperature);
            $averageTemperature = $this->calculateAverageTemperature($yearTemperature);
            $transformedData[$dateAbbreviation] = [$year => $averageTemperature];
        }

        return $transformedData;
    }
         /* Výpočet průměrné teploty ze zadaných teplot */  
    private function calculateAverageTemperature($temperatures) {
        $totalTemperature = array_sum($temperatures);
        $numberOfDays = count($temperatures);
        $averageTemperature = round($totalTemperature / $numberOfDays, 2);
        return $averageTemperature;
    } 
}
?>
