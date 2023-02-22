<?php

class Person {

    public $name;
    public $age;

    public function sayHellow () {
        return "Hellow, my name is {$this->name} My age {$this->age}";
        print_r($this);
    }

    public function sumTwoNumber($a, $b) {
        return ($a+$b);
    }

}

$person = new Person();


// assain value
$person->name = 'Sabbir Ahmmed';
$person->age = 20;

// call fuction
$printName = $person->sayHellow();

// call fuction
$sum = $person->sumTwoNumber(2, 3);

print_r($sum);
