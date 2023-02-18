<?php

$food = array(
    "z" => "Italian",
    "b" => "American",
    "d" => "Japanese",
    "c" => "Mexican"
);

// option 1
// shuffle($food);
$t_food  = $food;
shuffle($t_food);

print_r($t_food);
print_r($food);

// option 2
$key = array_rand($food);

print_r($key);