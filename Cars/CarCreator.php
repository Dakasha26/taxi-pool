<?php

abstract class CarCreator
{
    public abstract function createCar($rawCar): ICar;
}