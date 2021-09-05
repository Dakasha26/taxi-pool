<?php

class JsonReader
{
    protected $jsonData;

    public function __construct($filePath)
    {
        $jsonData = json_decode(file_get_contents($filePath), true);
    }

    public function getCars(){
        $rowCars = $this->jsonData->{'cars'};
        $cars = [];
        foreach($rowCars as $rowCar){
            $car = new Car()
            array_push($cars, );
        }
        return $cars;
    }

    public function getDrivers(){
        $drivers = null; // TODO доделать
        return $drivers;
    }
}