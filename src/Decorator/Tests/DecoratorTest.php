<?php

namespace DesignPatterns\Decorator\Tests;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Decorator\DoubleRoomBooking;
use DesignPatterns\Decorator\WiFi;
use DesignPatterns\Decorator\ExtraBed;

class DecoratorTest extends TestCase
{
    public function testCanCalculatePriceForBasicDoubleRoomBooking()
    {
        $booking = new DoubleRoomBooking();

        $this->assertEquals(40, $booking->calculatePrice());
        $this->assertEquals('double room', $booking->getDescription());
    }

    public function testCanCalculatePriceForDoubleRoomBookingWithWifi()
    {
        $booking = new DoubleRoomBooking();
        $booking = new WiFi($booking);

        $this->assertEquals(42, $booking->calculatePrice());
        $this->assertEquals('double room with wifi', $booking->getDescription());
    }

    public function testCanCalculatePriceForDoubleRoomBookingWithWifiAndExtraBad()
    {
        $booking = new DoubleRoomBooking();
        $booking = new WiFi($booking);
        $booking = new ExtraBed($booking);

        $this->assertEquals(72, $booking->calculatePrice());
        $this->assertEquals('double room with wifi with extra bed', $booking->getDescription());
    }
}
