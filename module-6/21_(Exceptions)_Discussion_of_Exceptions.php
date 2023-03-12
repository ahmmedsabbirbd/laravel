<?php

class Student{
    function __construct($name, $age) {
        if($age < 0) {
            throw new Exception("Invalid age", 100);
        }
    }
}


try {
    $name = new Student("Rahim", -1);
    echo "hi";
} catch (Exception $e) {
    echo $e->getCode().": ".$e->getMessage();
}