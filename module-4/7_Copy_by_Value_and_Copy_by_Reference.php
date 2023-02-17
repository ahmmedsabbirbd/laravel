<?php

$person = array(
    'fname'=> 'Sabbir',
    'lname'=> 'Ahmmed',
);

$newPerson = $person; // deep copy or copy by value

$newPerson['fname'] = 'Repuji';

// print_r($person);
// print_r($newPerson);


// copy by reference
// shallow copy
function printData(&$person){
    $person['fname'] .= " Korim";
    print_r($person);
}

printData($person);
print_r($person);