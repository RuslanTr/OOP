<?php

require_once __DIR__ . '/auto.php';

class Track extends Auto
{
    private $load;

    public function getLoad()
    {
        return $this->load;
    }

    public function setLoad($load)
    {
        $this->load = $load;
    }
    public function showInfo()
    {
        parent::showInfo();
        echo "Load: " . $this->load . PHP_EOL;
    }

}