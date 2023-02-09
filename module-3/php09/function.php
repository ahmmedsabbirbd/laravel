<?php 

// 9. Default value of function parameter or optional parameter

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

// serve function
function serve($foodName, $foodNumber='1 cup'){
    echo "Please serve {$foodName} in {$foodNumber}";
}