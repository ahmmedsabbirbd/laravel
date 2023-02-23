<?php
// 11_Discussion_of_Interfaces

interface oldInterface {
    function sayHellow();
    function sayHellow1($new);
    function sayHellow2();
}

interface newInterface extends oldInterface {
    function cat();
}

class oldClass implements oldInterface {
    function sayHellow() {

    }

    function sayHellow1($new) {

    }

    function sayHellow2() {

    }
}

class newClass implements newInterface {
    function cat() {

    }

    function sayHellow() {

    }
    function sayHellow1($new) {

    }
    function sayHellow2() {

    }
}

$oldClass = new oldClass();
echo $oldClass instanceof oldInterface;

$oldClass = new newClass();
echo $oldClass instanceof oldClass;

// force method
interface forceInterface {
    function forceMethod();
}

abstract class forceAbstract implements forceInterface {
    abstract public function run();
    
    public function forceMethod() {
        echo "Hi";
    }
}

class forceAbstractChild extends forceAbstract {
    
    function run() {
        echo "My code run";
    }
}

$forceResult = new forceAbstractChild();
echo $forceResult->run();