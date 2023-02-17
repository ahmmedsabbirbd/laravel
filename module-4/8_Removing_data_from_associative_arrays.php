<?php

$person = array(
    'fname'=> 'Sabbir',
    'lname'=> 'Ahmmed',
);

print_r($person);
unset($person['lname']);
print_r($person);