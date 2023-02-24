<?php
// 12_Static_methods_and_properties_of_classes

class Math {
    public $n = 'y';
    public static $number = "x";

    public static function sum() {
        echo "Hi";
        echo self::$number;
        // echo $this->n;
    }

    function multiple() {
        // echo $this->number;
        echo self::$number;
    }
}

echo Math::sum();

$math = new Math();

echo $math->multiple();