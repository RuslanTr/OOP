<?php

require_once __DIR__ . '/car.php';
require_once __DIR__ . '/auto.php';
require_once __DIR__ . '/track.php';
require_once __DIR__ . '/catalog.php';

$car = new Car;
$car->setBrand('Mersedes');
$car->setModel('S600');
$car->setCode('543543543523523');
$car->setYear('2018');
$car->setKit('max');

$track = new Track;
$track->setBrand('MAN');
$track->setModel('L230');
$track->setCode('4523423423');
$track->setYear('2001');
$track->setLoad('30T');

$catalog = new Catalog;
$catalog->setAuto($car);
$catalog->setAuto($track);

$catalog->display();

