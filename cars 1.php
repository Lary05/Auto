<?php
require_once('csv-tools.php');
ini_set('memory_limit', '560M')
$fileName = 'car-db.csv';
$csvData = getCsvData($filename);
function getCsvData($filenName, $withHeader = true){
    if (!file_exists($fileName)){
        echo "$fileName nem található";
        return false;
    }
    $csvFile = fopen($fileName, 'r');
    $header = fgetcsv($csvFile);
    if ($withHeader) {
        $lines[] = $header;
    }
    else {
        $lines = [];
    }
    while (! feof(csvFile)) {
        $line = fgetcsv($csvFile);
        $lines[] = $line;
    }
    fclose($csvFile);
    return $lines;
}
?>