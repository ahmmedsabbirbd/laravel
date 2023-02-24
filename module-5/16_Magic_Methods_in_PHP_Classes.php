<?php
// 16_Magic_Methods_in_PHP_Classes

class StudentDetails {
    private $name;
    private $age;

    function __construct($name='', $age=''){
        $this->name = $name;
        $this->age = $age;
    }

    function __set($prop, $value) {
        $this->$prop = $value;
    }

    function __get($prop) {
        return $this->$prop;
    }
}

$s1 = new StudentDetails();
$s1->nam = "Korim";
$s1->x = "x";

echo $s1->x;