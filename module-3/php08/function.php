<?php 

// 8. Type hinting or type checking of function parameters

// Check is even or odd
function isEven($n) { // parametter
    if (($n % 2) == 0) {
        return true;
    }    
    return false;
}

// check fatorial
function factorial($n) {
    if(gettype($n) !== 'integer') {
        return 'invalid';
    }

    $resut = 1;

    for($i=$n; $i>1; $i--) {
        $resut *=$i;
    }

    return $resut;
}