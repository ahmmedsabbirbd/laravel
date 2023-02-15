<?php

// Multidimensional Array
$students = array(
    array("Sabbir Ahnmed", "20", "male"),
    array("Korim Ahnmed", "22", "male"),
);

foreach($students as $singleStudent) {
    foreach($singleStudent as $studentDetails) {
        echo "{$studentDetails} <br>";
    }
    echo "<br>";
}