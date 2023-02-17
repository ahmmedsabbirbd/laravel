<?php

$food = array(
    "z" => "Italian",
    "b" => "American",
    "d" => "Japanese",
    "c" => "Mexican"
);
$food1 = array(
    "z" => "banana",
    "b" => "American",
    "d" => "Japanese",
    "x" => "Mexican"
);

$commonFood = array_intersect($food, $food1);
$commonFood = array_intersect_assoc($food, $food1); // comon with keys
print_r($commonFood);

$foodDiff = array_diff_assoc($food, $food1);
print_r($foodDiff);

$numbers = array(9, 3, 43, 4, 1, 5);
$numbers1 = array(9, 88, 43, 2, 1, 5);

$commonNumber = array_intersect($numbers, $numbers1);
print_r($commonNumber);

$numberDiff = array_diff($numbers, $numbers1);
print_r($numberDiff);