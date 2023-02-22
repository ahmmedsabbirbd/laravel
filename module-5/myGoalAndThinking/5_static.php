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
    public static function sumTwoNumberS($a, $b) {
        return ($a + $b);
    }
}

echo Person::sumTwoNumberS(3, 12);