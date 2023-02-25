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

    public function __clone(){
        $this->data =clone $this->data;
    }
}

$f1 = new FavColor(1);
$f2 = clone $f1;

$f2->setData(2);
print_r($f1);
print_r($f2);