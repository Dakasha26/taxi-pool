<?php

abstract class Car implements ICar
{
    // Статистические данные о средних показателях
    protected const FUEL_CONSUMPTION = 10.0; // на 100 км
    protected const KM_ON_PERCENT = 1000; // количество километров на 1% к вероятности поломки
    protected const INIT_CRASH_PROBABILITY = 0.5;
    protected const KM_OF_VOYAGE = 7.0;

    protected int $km;
    protected float $fuel;
    protected bool $isCrashed = false;


    public function doVoyage(){
        if($this->isCrashed == false) {
            $this->useFuel(); // TODO: если топливо кончилось во время поездки
            $this->km += self::KM_OF_VOYAGE;
            $this->checkCrashed();
        }
    }

    public function __construct($km){
        $this->km = $km;
    }

    abstract protected function checkCrashed();

    abstract protected function useFuel();
}