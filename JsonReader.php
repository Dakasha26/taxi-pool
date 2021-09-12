<?php

class JsonReader
{
    protected $jsonData;

    public function __construct($filePath)
    {
        $jsonData = json_decode(file_get_contents($filePath), true);
    }

    public function getCars(){
        $carCreator = new CarCreator();
        $rawCars = $this->jsonData->{'cars'};
        $cars = [];
        foreach($rawCars as $rawCar){
            $car = $carCreator->createCar($rawCar);
            array_push($cars, $car);
        }
        return $cars;
    }

    public function getDrivers(){
        $drivers = null; // TODO доделать
        return $drivers;
    }
}