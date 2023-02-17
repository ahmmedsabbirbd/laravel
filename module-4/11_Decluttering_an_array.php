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


$importantNumber = array_splice($numbers, 0, -1, true);
$randomData = array_splice($random, 4, -1, true);

print_r($numbers);
print_r($importantNumber);
