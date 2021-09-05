<?php

class Taxipull
{
    protected Driver $drivers;
    protected Car $cars;
    protected Place $places;


    public function __construct($cars, $drivers)
    {
        $this->cars = $cars;
        $this->drivers = $drivers;
    }

    public function startDay(){
        foreach($this->$drivers as $driver){

        }
    }

    protected function finishDay(){

    }
}