<?php

$numbers = range(40, 100);
// print_r($numbers);

shuffle($numbers); 

$random = mt_rand(0, 60);
echo $numbers[$random];