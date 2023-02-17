<?php

$food = array(
    "z" => "Italian",
    "b" => "American",
    "d" => "Japanese",
    "c" => "Mexican"
);
$numbers = array(9, 88, 43, 2, 1, 5);


// array_walk
function square($n) {
    printf("Square of %d is %d \n", $n, $n*$n);
}

// array_walk($numbers, 'square');

// array_map
function cube($n) {
    return $n*$n*$n;
}

$newNumber = array_map('cube', $numbers);
// print_r($numbers);
// print_r($newNumber);


function even($n) {
    if($n % 2 == 0) {
        return $n;
    }
}

$allEven = array_filter($numbers, 'even');

// print_r($allEven);


$person = array('Refuji', 'Jodu', 'sabbir', 'Korim', 'Rorim');

function fillterByR($p) {
    if(strtolower($p[0]) == 'r') {
        return $p;
    }
}

$fillterR = array_filter($person, 'fillterByR');

print_r($fillterR);
