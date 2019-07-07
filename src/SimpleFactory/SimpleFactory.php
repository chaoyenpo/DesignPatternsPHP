<?php

namespace DesignPatterns\SimpleFactory;

class SimpleFactory
{
    public function createBicycle(): Bicycle
    {
        return new Bicycle();
    }

    public function createCar(): Car
    {
        return new Car();
    }
}
