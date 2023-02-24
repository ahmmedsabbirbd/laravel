<?php
// 15_Creating_constants_in_classes

class myClass {
    const CITIY = "Dhaka";

    function sayHellow() {
        echo $this::CITIY;
    }
}

$myClass = new myClass();

echo $myClass->sayHellow();

echo myClass::CITIY;