<?php
// 16_Magic_Methods_in_PHP_Classes

class Jela implements IteratorAggregate {
    private $jela;

    function __construct(){
        $this->jela = array();
    }

    function addJela($jela){
        array_push($this->jela, $jela);
    }

    function getJela(){
        return $this->jela;
    }

    function getIterator() {
        return new ArrayIterator($this->jela);
    }
}

$jela = new Jela();

// add
$jela->addJela('Rajshahi');
$jela->addJela('kummila');

foreach($jela as $j) {
    echo $j.PHP_EOL;
}