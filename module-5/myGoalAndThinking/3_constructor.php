<?php

class Person {

    // property
    public $name;
    // property
    public $age;

    
    // method
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
        
        echo "Hellow, my name is {$this->name} My age {$this->age}";
        print_r($this);
    }
    
    // method
    public function sumTwoNumber($a, $b) {
        return ($a+$b);
    }

}

$person = new Person("Sabbir Ahmmed", 20);
