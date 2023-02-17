<?php

$person = -1;

if(isset($person)) {
    echo "Persont is set";
} else {
    echo "Persont is not set";
}

echo PHP_EOL;

if(empty($person)) {
    echo "Persont is empty";
} else {
    echo "Persont is not empty";
}
echo PHP_EOL;

if(isset($person) && (is_numeric($person)) || $person != '') {
    echo "Persont is set and empty";
} else {
    echo "Persont is not set and empty";
}

