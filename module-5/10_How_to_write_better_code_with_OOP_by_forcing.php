<?php
// 10_How_to_write_better_code_with_OOP_by_forcing

// declear spacipic object added.

class shape {

}

class Shapes {
    private $shapes;
    
    function __construct(){
        $this->shapes = array();
    }

    function addShape(shape $shape) {
        array_push($this->shapes, $shape);
    }

    function totalShapes() {
        return count($this->shapes);
    }
}

class Rectangle extends shape {

}

class Triangle extends shape {

}

class Student {

}

$shapes = new Shapes();

$shapes->addShape(new Rectangle());
$shapes->addShape(new Triangle());
// $shapes->addShape(new Student());

print_r($shapes->totalShapes());