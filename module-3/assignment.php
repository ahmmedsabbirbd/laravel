<?php
// 1. Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision
function evenOddCheck(int $n) {
    ($n % 2 === 0) ? ($result = "The number {$n} is even") : ($result = "The number {$n} is odd");
    return $result;
}
echo evenOddCheck(4);
echo PHP_EOL;

// 2. 1+2+3...…….100  Write a loop to calculate the summation of the series
$sum = 0;
for($i=1; $i<=100; $i++) {
    $sum += $i;
}
echo $sum;