<?php

$food = array(
    "z" => "Italian",
    "b" => "American",
    "d" => "Japanese",
    "c" => "Mexican"
);
$numbers = ['9', 3, 43, 4, 1, 5];

if(in_array('9', $numbers, true)) {
    echo "5 is found \n";
} else {
    echo "5 is not found";
}

$offset = array_search(5, $numbers);
echo $offset.PHP_EOL;

if(key_exists('h', $food)) {
    echo "h key is exisit";
}