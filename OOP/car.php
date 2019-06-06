<?php

require_once __DIR__ . '/auto.php';

class Car extends Auto
{
    private $kit;

    public function setKit($kit)
    {
        $this->kit = $kit;
    }
    public function showInfo()
    {
        parent::showInfo();
        echo "Car kit: " . $this->kit . PHP_EOL;
    }
}
