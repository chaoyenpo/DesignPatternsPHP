<?php

namespace DesignPatterns\SimpleFactory;

class Car
{
    public $destination;

    public function driveTo($destination)
    {
        $this->destination = $destination;
    }
}
