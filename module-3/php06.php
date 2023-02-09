<?php 

// 6. Printing the Fibonacci Series with Loops
$veryOld = 0;
$old = 1;
$new = 1;

for($i=0; $i<20; $i++) {
    echo $veryOld." ";
    
    $old = $new;
    $new = $veryOld + $old;
    $veryOld = $old; 
}