<?php
use simpleFactory\Driver;
require_once 'SimpleFactory.php';
$oCar = Driver::driverCar('bmw');
$oCar->drive();