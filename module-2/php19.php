<?php

//  19 Alternative Syntax of Control Structures

$x = 5;
$y = 4;

if($x == $y):
    echo "{$x} and {$y} is same";
    echo PHP_EOL;
elseif ($x > $y):
    echo "{$x} is big";
else:
    echo "{$x} and {$y} is not same";
endif;