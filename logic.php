<?php
//convertimos csv en array
$array = array_map('str_getcsv', file('csv.csv'));
//convertimos array en json
$arrayToDataTable = json_encode($array, JSON_NUMERIC_CHECK);
?>
