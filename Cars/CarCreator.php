<?php

class CarCreator
{
    public function createCar($rawCar): ICar{
        $kmCar = $rawCar['km'];
        switch($rawCar['brand']){
            case('Homba'):
                return new Homba($kmCar);
            case('Luda'):
                return new Luda($kmCar);
            case('Hendai'):
                return new Hendai($kmCar);
            default:
                throw new Exception();
        }
    }
}