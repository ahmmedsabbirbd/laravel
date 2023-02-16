<?php

$students = [
    "Rohim",
    "korim",
    "Jodu",
];

print_r($students);

// array methor
// array_shift();
// array_unshift();
// array_push();
// array_pop();

$removeLastStudent = array_pop($students);
$removeFirstStudent = array_shift($students);

print_r($students);

$students[] = 'Repuji';
print_r($students);

array_unshift($students, 'sala');
array_push($students, 'sala');
print_r($students);

