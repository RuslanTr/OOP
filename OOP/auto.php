<?php

class Auto
{
    private $brand;
    private $year;
    private $model;
    private $code;

    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }
    public function showInfo()
    {
        echo 'Brand: ' . $this->brand . PHP_EOL;
        echo 'Year: ' . $this->year . PHP_EOL;
        echo 'Model: ' . $this->model . PHP_EOL;
        echo 'VIN code: ' . $this->code . PHP_EOL;

    }
}

