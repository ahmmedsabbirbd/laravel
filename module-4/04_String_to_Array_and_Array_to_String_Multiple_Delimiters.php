<?php

$names = "Komela, refuji, nodi, fokir, joni,sing";

// $names_array = explode(', ', $names);
$names_array = preg_split(('/(, |,)/'), $names);


$name_string = join(', ', $names_array);
print_r($names_array);
print_r($name_string);