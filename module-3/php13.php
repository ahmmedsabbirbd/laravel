<?php 

// 13. Recursion and Recursive Functions

function recursion(int $start, int $end, int $steping) {
    if($start >= $end) { 
        return;
    }
    echo $start."\n";
    $start += $steping;

    recursion($start, $end, $steping);
}

recursion(1, 20, 2);