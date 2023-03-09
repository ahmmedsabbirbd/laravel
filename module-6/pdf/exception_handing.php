<?php

function addNumber($n) {
    if(gettype($n) != "integer") {
        throw new Exception("Invalid number");
    } else if($n == 10) {
        throw new Exception("test exception");
    }
    echo "Your number is: {$n}";
}

try {
    addNumber(10);
} catch (Exception $e) {
    print_r($e);
    print_r($e->getMessage());
}