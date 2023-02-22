<?php

use Person as GlobalPerson;

class Person {

    // property
    public $name;
    
    // property
    public $age;

    function __construct($name, $age) {
        $this->name= $name;
        $this->age= $age;
    }

    // method
    protected function sayHellow () {
        return "Hellow, my name is {$this->name} My age {$this->age}";
        print_r($this);
    }

    // method
    private function sumTwoNumber($a, $b) {
        return ($a+$b);
    }
    
    // method
    public function sumTwoNumber1($a, $b) {
        return ($a+$b);
    }

    // method
    static function sumTwoNumberS($a, $b) {
        return ($a + $b);
    }

    // method
    protected function multipleNumebr($a, $b) {
        return ($a * $b);
    }
}

$person = new Person("Sabbir", 30);
echo $person->sumTwoNumber1(1, 1);
// echo $person->sayHellow();

echo PHP_EOL;

class PersonChild extends Person {

    public function multipleNumebrVag($a, $b, $c) {
        $multiple = parent::multipleNumebr($a, $b);
        return ($multiple / $c);
    }
}

$child =new PersonChild("Sabbir", 30);
echo $child->multipleNumebrVag(10, 10, 10);

