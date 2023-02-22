<?php
// 3 A class's constructor method that runs automatically when an object is created from the class

// class
class Human {

    // property
    public $name;
    // property
    public $age;

    function __construct($name, $age=0){
        $this->name = $name;
        $this->age = $age;
    }

    // method
    public function sayName() {
        if($this->age >0) {
            echo "Your name {$this->name}.
            Your age {$this->age}";
        } else {
            echo "Your name {$this->name}.
            I don't know your age.";
        }
    }
}

// object
$sabbir = new Human('Sabbir Ahmmed'); 
echo $sabbir->sayName().PHP_EOL;

// object
$refuji = new Human('Refuji', 20);
echo $refuji->sayName();
