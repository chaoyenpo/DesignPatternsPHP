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

    public function testBicyleCanDriveTo()
    {
        $destination = "Taipei";

        $bicycle = (new SimpleFactory)->createBicycle();
        $bicycle->driveTo($destination);

        $this->assertTrue($bicycle->destination === $destination);
    }

    public function testCanCreateCar()
    {
        $car = (new SimpleFactory)->createCar();

        $this->assertInstanceOf(Car::class, $car);
    }

    public function testCarCanDriveTo()
    {
        $destination = "Taipei";

        $car = (new SimpleFactory)->createCar();
        $car->driveTo($destination);

        $this->assertTrue($car->destination === $destination);
    }
}
