<?php
/* 
Třída MaxResultAnalysis provádí analýzu a zobrazení max. teplotních dat.
*/
class MaxResultAnalysis {
      /*
    Metoda getTemperatureData získává teplotní data pro vybraný rok nebo vrátí všechna data, pokud není vybrán žádný rok.
    */
    public function getTemperatureData($selectedYear) {
        /* Zahrnutí souboru s teplotními daty */
        $temperatureData = require 'maxdatas.php';

        /* Pokud není vybrán žádný rok, vrátíme všechna data */
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
        echo '<tr><th>Month year</th><th>Maximum temperature</th></tr>';
        foreach ($temperatureData as $dateAbbreviation => $yearTemperature) {
            $year = key($yearTemperature);
            $maximumTemperature = current($yearTemperature);
            echo "<tr><td>$dateAbbreviation</td><td>$maximumTemperature °C</td></tr>";
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
            $maximumTemperature = current($yearTemperature);
            $transformedData[$dateAbbreviation] = [$year => $maximumTemperature];
        }

        return $transformedData;
    }
}
?>
