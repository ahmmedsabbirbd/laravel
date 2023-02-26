<?php
namespace Project;

require_once "n1.php";
require_once "n2.php";

use \Project\Bike as FirstNewBike;
use \Project\Motorcycle\Bike as SecondNewBike;

$a = new Bike();
$a->getName();

$FirstNewBike = new FirstNewBike();
$FirstNewBike->getName();

$SecondNewBike = new SecondNewBike();
$SecondNewBike->getName();