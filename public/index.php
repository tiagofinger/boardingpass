<?php

require "../vendor/autoload.php";

use App\Classes\Factories\BoardingPassFactory;
use App\Classes\TripPlanner;
use App\Classes\City;
use App\Classes\Passenger;
use App\Classes\Airplane;
use App\Classes\Car;
use App\Classes\Driver;
use App\Classes\Airport;
use App\Classes\PrintJson;

$boardingPass1 = BoardingPassFactory::create(
    'F',
    new City('Paris'),
    new City('Amsterdam'),
    '01/01/2019',
    '01:00',
    new Airplane(),
    new Passenger('Tiago Finger', 1234444),
    null,
    new Airport('Salgado Filho'),
    'EJ1',
    'E56',
    '4'
);


$boardingPass2 = BoardingPassFactory::create(
    'F',
    new City('Amsterdam'),
    new City('London'),
    '01/01/2019',
    '01:00',
    new Airplane(),
    new Passenger('Tiago Finger', 1234444),
    null,
    new Airport('Salgado Filho'),
    'EJ1',
    'E56',
    '4'
);

$boardingPass3 = BoardingPassFactory::create(
    'F',
    new City('London'),
    new City('São Paulo'),
    '01/01/2019',
    '01:00',
    new Airplane(),
    new Passenger('Tiago Finger', 1234444),
    null,
    new Airport('Salgado Filho'),
    'EJ1',
    'E56',
    '4'
);

$boardingPass4 = BoardingPassFactory::create(
    'S',
    new City('São Paulo'),
    new City('Rio de Janeiro'),
    '01/01/2019',
    '01:00',
    new Car(),
    new Passenger('Tiago Finger', 1234444),
    new Driver('João')
);

$tripPlanner = new TripPlanner();
$tripPlanner->add($boardingPass1);
$tripPlanner->add($boardingPass2);
$tripPlanner->add($boardingPass3);
$tripPlanner->add($boardingPass4);

$tripPlanner->organize();
echo $tripPlanner;
