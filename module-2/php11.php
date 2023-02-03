<?php

// 11 Discussion of Condition (Logic) and Logical Operators in PHP.
$x = 3;
$y = 5;

if($x == $y) {
    echo 'Two number is same';
} else {
    echo 'Two number is not same';
}

echo PHP_EOL;

// second condition
$name = 'sabbir';
$x = 5;
if($x == $y && 'sabbir' == $name) {
    echo 'Two number is same';
} else {
    echo 'Two number is not same';
}

echo PHP_EOL;

// three condition
$name = 'sabbir';
$x = 8;
if($x == $y || 'sabbir' == $name) {
    echo 'Two number is same';
} else {
    echo 'Two number is not same';
}

echo PHP_EOL;
 