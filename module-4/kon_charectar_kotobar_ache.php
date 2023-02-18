<?php

// kon charectar kotobar ache function
function charectarCheckInWord($str) {
    if(gettype($str) != 'string') {
        echo "Please send string";
        return true;
    } 

    $characters = range('a', 'z');
    $parts = str_split($str);
    
    $finalyArray = array();
    foreach($parts as $part) {
        $part = strtolower($part);
        foreach($characters as $charact) {
            if($part == $charact) {
                if(isset($finalyArray[$part])) {
                    $finalyArray[$part] += 1;
                } else {
                    $finalyArray[$part] = 1;
                }
            }
        }
    }
    
    foreach($finalyArray as $charect => $keysofCharectar) {
        printf("The %s charectar have is %d\n", strtoupper($charect), $keysofCharectar);
    }
}

charectarCheckInWord('Sabbir is a bad');