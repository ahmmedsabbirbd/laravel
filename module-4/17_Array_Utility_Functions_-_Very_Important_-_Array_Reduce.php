<?php

$food = array(
    "z" => "Italian",
    "b" => "American",
    "d" => "Japanese",
    "c" => "Mexican"
);
$numbers = array(9, 88, 43, 2, 1, 5);

function sum($oldValue = 0, $newValue) {
    return $oldValue + $newValue;
}

function onlyevenSum($oldValue, $newValue) {
    if($newValue % 2 == 0) {
        return $oldValue + $newValue;
    }
    return $oldValue;
}

$sum = array_reduce($numbers, 'sum', 0);
$onlyevenSum = array_reduce($numbers, 'onlyevenSum', 0);

echo $onlyevenSum;