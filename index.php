<?php

class Vehicle {

    private $colour;

    function __construct($colour)
    {
        $this->colour = $colour;
    }

    private function checkBreak()
    {
        return true;
    }

    function another() {
        return false;
    }
//sd
}
