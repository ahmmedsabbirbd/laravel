<?php

class Person {

    // property
    public $name;
    
    // property
    public $age;

    // method
    public function sayHellow () {
        return "Hellow, my name is {$this->name} My age {$this->age}";
        print_r($this);
    }

    // method
    private function sumTwoNumber($a, $b) {
        return ($a+$b);
    }

    // method
    public function sumTwoNumberS($a, $b) {
        return $this->sumTwoNumber($a, $b);
    }

}

$person = new Person();

// assain value
$person->name = 'Sabbir Ahmmed';
$person->age = 20;

// call fuction
$printName = $person->sayHellow();

// call fuction // access private method
$sum = $person->sumTwoNumberS(2, 3);

print_r($sum);