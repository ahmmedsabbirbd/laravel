<?php
// 16_Magic_Methods_in_PHP_Classes

class Jela implements IteratorAggregate, Countable {
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

    function count() {
        return count($this->jela);
    }
}

$jela = new Jela();

// add
$jela->addJela('Rajshahi');
$jela->addJela('kummila');

foreach($jela as $j) {
    echo $j.PHP_EOL;
}

echo count($jela);