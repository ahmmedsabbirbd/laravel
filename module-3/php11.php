<?php 

// 11. Accepting Unlimited Arguments in Functions

function sum($x, int ...$numbers):int {
    echo $x.PHP_EOL; // specal value

    $result = 0;
    for($i=0;$i<count($numbers); $i++) {
        $result += $numbers[$i];
    }

    return $result;
}

echo sum(1, 2, 10, 1);