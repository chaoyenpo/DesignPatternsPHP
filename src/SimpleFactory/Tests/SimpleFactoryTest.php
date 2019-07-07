<?php

namespace DesignPatterns\AbstractFactory\Tests;

use PHPUnit\Framework\TestCase;
use DesignPatterns\SimpleFactory\Car;
use DesignPatterns\SimpleFactory\Bicycle;
use DesignPatterns\SimpleFactory\SimpleFactory;

class SimpleFactoryTest extends TestCase
{
    public function testCanCreateBicycle()
    {
        $bicycle = (new SimpleFactory)->createBicycle();

        $this->assertInstanceOf(Bicycle::class, $bicycle);
    }

    public function testCanDriveToForBicyle()
    {
        $destination = "Taipei";

        $bicycle = (new SimpleFactory)->createBicycle();
        $bicycle->driveTo($destination);

        $this->assertEquals($destination, $bicycle->destination);
    }

    public function testCanCreateCar()
    {
        $car = (new SimpleFactory)->createCar();

        $this->assertInstanceOf(Car::class, $car);
    }

    public function testCanDriveToFroCar()
    {
        $destination = "Taipei";

        $car = (new SimpleFactory)->createCar();
        $car->driveTo($destination);

        $this->assertEquals($destination, $car->destination);
    }
}
