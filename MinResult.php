<?php

class MinResultAnalysis {
    public function getTemperatureData($selectedYear) {
        /* Zahrnutí souboru s teplotními daty */
        $temperatureData = require 'mindatas.php';

        /* Pokud není vybrán žádný rok, vrátí všechna data */
        if (empty($selectedYear)) {
            return $this->transformData($temperatureData);
        }

        /* Filtruje data pouze pro vybraný rok */
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
        echo '<tr><th>Month year</th><th>Minimum temperature</th></tr>';
        foreach ($temperatureData as $dateAbbreviation => $yearTemperature) {
            $year = key($yearTemperature);
            $minimumTemperature = current($yearTemperature);
            echo "<tr><td>$dateAbbreviation</td><td>$minimumTemperature °C</td></tr>";
        }
        echo '</table>';
    }
        /* Transformování teplotních dat */
    private function transformData($temperatureData) {
        $transformedData = [];

        foreach ($temperatureData as $dateAbbreviation => $yearTemperature) {
            $year = key($yearTemperature);
            $minimumTemperature = current($yearTemperature);
            $transformedData[$dateAbbreviation] = [$year => $minimumTemperature];
        }

        return $transformedData;
    }
}
?>
