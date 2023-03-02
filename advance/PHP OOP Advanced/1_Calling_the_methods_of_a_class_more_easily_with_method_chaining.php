<?php

// $s= new StringUtility("Hellow World");

// $s->search("World")->replace("Earth")->upperCase();

class StringUtility{
    private $str;
    private $search;
    
    function __construct($str){
        $this->str = $str;
    }
    
    function upperCase() {
        $this->str = strtoupper($this->str);
        return $this;
    }
    
    function lowerCase() {
        $this->str = strtoupper($this->str);
        return $this;
    }

    function addText($hi) {
        $this->str = $this->str.$hi;
        return $this;
    }

    function printMy() {
        echo $this->str;
    }
}

$str = new StringUtility("Hi kire");

// $str->
// upperCase()->
// addText("Hi")->
// lowerCase();

$str->addText("xxx")->printMy();