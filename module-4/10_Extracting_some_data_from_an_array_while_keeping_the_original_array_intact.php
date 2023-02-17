<?php

$numbers = array(1, 4, 5, 6);

$importantNumber = array_slice($numbers, 1, 2);
$importantNumber = array_slice($numbers, 0, -1, true);

// print_r($importantNumber);


$random = array(
    "a" => 3,
    "b" => 5,
    "c" => 23,
    "d" => 6,
    2 => 5,
    "e" => 2,
    "f" => 2,
);

$randomData = array_slice($random, 4, -1, true);

print_r($randomData);