<?php

$numbers = array(1, 4, 5, 6);
$random = array(
    "a" => 3,
    "b" => 5,
    "c" => 23,
    "d" => 6,
    2 => 5,
    "e" => 2,
    "f" => 2,
);

$newNumber1 = array_slice($numbers, 0, 1);
$newNumber2 = array_slice($numbers, 1);

$newNumber12 = array_merge($newNumber1, $newNumber2);
// print_r($newNumber1);
// print_r($newNumber2);
// print_r($newNumber12);


$newNumber1 = array_slice($numbers, 0, 1);
$newNumber2 = array_slice($numbers, 1, null, true);
$newNumber12_1 = $newNumber1 + $newNumber2; // array_merge
// print_r($newNumber12_1)

$randomData = array_slice($random, 2, 3, true);
$randomData1 = array_slice($random, 3, 3, true);
$randomData2 = $random = array(
    "m" => 3,
    "n" => 5,
    "o" => 23,
    "p" => 6,
    "q" => 5,
    "r" => 2,
    "s" => 2,
);

$finalyArray = array_merge($randomData, $randomData1, $randomData2);
$finalyArray1 = $randomData + $randomData1 + $randomData2; // array merge correct way
print_r($finalyArray1);