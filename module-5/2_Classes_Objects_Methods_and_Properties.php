<?php

// class
class Human {

    // property
    public $name;

    // method
    function sayName() {
        echo "Your name {$this->name}";
    }
}

// object
$sabbir = new Human();
$sabbir->name = "Sabbir Ahmmed";

echo $sabbir->sayName().PHP_EOL;

// object
$refuji = new Human();
$refuji->name = "Refuji Ahmmed";

echo $refuji->sayName();