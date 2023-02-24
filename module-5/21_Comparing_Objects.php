<?php
// 19_Object_Cloning_in_PHP

class FavColor {
    public $data;

    function __construct($data) {
        $this->data = $data;
    }

    function setData($data) {
        $this->data = $data;
    }
}

$f1 = new FavColor("Red");
$f2 = new FavColor("Blue");
$f3 = new FavColor("Red");

if($f1 === $f3) {
    echo "F1 and F2 Same";
} else {
    echo "F1 and F2 not Same";
}