<?php

namespace DesignPatterns\SimpleFactory;

class Bicycle
{
    public $destination;

    public function driveTo($destination)
    {
        $this->destination = $destination;
    }
}
