<?php

// Multidimensional Array
$students = array(
    array("Sabbir Ahnmed", "20", "male"),
    array("Korim Ahnmed", "22", "male"),
);

echo "<pre>";
var_dump($students);
echo "</pre>";
echo $students[0][0];
