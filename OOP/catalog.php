<?php

require_once __DIR__ . '/auto.php';

class Catalog
{
    private $vehicles = [];

    public function setAuto(Auto $auto)
    {
        $this->vehicles[] = $auto;
    }
    public function display()
    {
        foreach ($this->vehicles as $vehicle)
        {
            $vehicle->showInfo() . PHP_EOL;
        }
    }
}