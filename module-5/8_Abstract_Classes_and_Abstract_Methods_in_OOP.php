<?php
// 8_Abstract_Classes_and_Abstract_Methods_in_OOPSSS

abstract class ParentClass{
    
    protected function sayHellow() {
        echo "Hi";
    }

    abstract function eat();
}

class ChildClass extends ParentClass{

    function eat() {
        return "Hi";
    }
}

$childClass = new ChildClass();

print_r($childClass->eat());