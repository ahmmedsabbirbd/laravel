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

    function __toString() {
        return $this->data;
    }
}

$f1 = new FavColor("Red"); 

echo $f1;