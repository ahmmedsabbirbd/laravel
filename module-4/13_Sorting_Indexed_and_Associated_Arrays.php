<?php

$food = array(
    "z" => "Italian",
    "b" => "American",
    "d" => "Japanese",
    "c" => "Mexican"
);
// sort($food); // sort by value of a-z
// asort($food); // sort by value of a-z and same keys
// rsort($food); // sort by value of z-a and
krsort($food); // sort by keys of a-z and
print_r($food);

$numbers = [9, 3, 43, 4, 1, 5];
sort($numbers);
print_r($numbers);


for($i=0; $i<count($numbers); $i++) {
    echo $numbers[$i].PHP_EOL;
} // print by before sort

foreach($numbers as $n) {
    echo $n.PHP_EOL;
} // print by after sort

// a b c d
print_r($food);
foreach($food as $k => $f) {
    echo $food[$k].PHP_EOL;
} // print by after sort