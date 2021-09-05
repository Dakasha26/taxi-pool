<?php

// filePath, numberOfDays
$data = array_slice($argv, 1);

try{
    $jsonReader = new JsonReader($data[0]);
    echo 'Файл успешно прочитан'; // TODO удалить лишнюю информацию
    $taxiPull = new Taxipull($jsonReader->getCars(), $jsonReader->getDrivers());
    echo 'Таксопарк успешно создан';
}catch (Exception $ex){

}

function runTaxiPull($taxiPull, $numberOfDays){
    $report = new Report();
    for($i = 0; $i < $numberOfDays; $i++) {
        $taxiPull->startDay();
//        $report;
        }
}