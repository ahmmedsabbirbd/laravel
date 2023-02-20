<?php

// 1.Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)
$arr = array("sabbir", "korim", "refuji", "Yousof Vai");

function arrayByLenth($arr) {
    usort($arr, function($a, $b) {
        return (strlen($a) - strlen($b));
    });

    return $arr;
}

// print_r(arrayByLenth($arr));

// 2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.
$fStr = 'Sabbir Ahmmed';
$lStr = 'Is bad boy';

function concatenateTwoStrings($a, $b) {
    $a = explode(' ',$a);
    $a = array_shift($a);
    
    $b = explode(' ',$b);
    $b = strrev(array_pop($b));

    return ($a.' '.$b);
}
// echo concatenateTwoStrings($fStr, $lStr);

// 3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.
$oldArray = array("sabbir", "korim", "refuji", "Yousof Vai");

function removeLastFirstAndReturnArray($oldArray){
    array_pop($oldArray);
    array_shift($oldArray);

    return $oldArray;
}
$newArroy = removeLastFirstAndReturnArray($oldArray);
// print_r($newArroy);


// 4.Write a PHP function to check if a string contains only letters and whitespace.
function containsOnlyLettersAndWhitespace($str) {
    if ( preg_match ("/^[a-zA-Z\s]+$/",$str)) {
        $result = "string contains only letters and whitespace";
    } else {
        $result = "not string contains only letters and whitespace";
    }
    return $result;
}
$str1 = "Hellow word";
$str2 = "Hellow word, hi";

echo containsOnlyLettersAndWhitespace($str1).PHP_EOL;
echo containsOnlyLettersAndWhitespace($str2);

// 5.Write a PHP function to find the second largest number in an array of numbers.
$numbers = array(5, 3, 32, 1, 10);
function findSecondLargestNum(array $arr):int {
    if(count($arr) <= 2) {
        return "Please send minimum 3 values";
    }

    usort($arr, function($a, $b) {
        return ($a < $b);
    });

    return $arr[1];
}

// echo findSecondLargestNum($numbers);
