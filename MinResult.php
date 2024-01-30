<?php
/* 
Třída MinResultAnalysis provádí analýzu a zobrazení min. teplotních dat.
*/
class MinResultAnalysis {
     /*
    Metoda getTemperatureData získává teplotní data pro vybraný rok nebo vrátí všechna data, pokud není vybrán žádný rok.
    */
    public function getTemperatureData($selectedYear) {
        /* Zahrnutí souboru s teplotními daty */
        $temperatureData = require 'mindatas.php';

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
        echo '<tr><th>Month year</th><th>Minimum temperature</th></tr>';
        foreach ($temperatureData as $dateAbbreviation => $yearTemperature) {
            $year = key($yearTemperature);
            $minimumTemperature = current($yearTemperature);
            echo "<tr><td>$dateAbbreviation</td><td>$minimumTemperature °C</td></tr>";
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
            $minimumTemperature = current($yearTemperature);
            $transformedData[$dateAbbreviation] = [$year => $minimumTemperature];
        }

        return $transformedData;
    }
}
?>
