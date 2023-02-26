<?php
namespace Astronomy;

require_once "planet.php";

class SayHi extends Plantet\Planet {

}

$sayHi = new SayHi();

$sayHi->sayHellow();
