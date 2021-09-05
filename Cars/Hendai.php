<?php

class Hendai extends Car
{

    protected function checkCrashed()
    {
        $crashProbability = self::INIT_CRASH_PROBABILITY + $this->km/self::KM_ON_PERCENT;
        if(rand(1, 100) > $crashProbability)
            $this->isCrashed = true;
    }

    protected function useFuel()
    {
        $this->fuel -= self::FUEL_CONSUMPTION * 10/100;
    }

    protected function __construct(){

    }

    public function createCar($rawCar): Car
    {
        if($rawCar->{'brand'} == 'Hendai')
            return $this->__construct();
    }
}