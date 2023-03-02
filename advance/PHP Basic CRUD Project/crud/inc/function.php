<?php

define('DB_NAME', './data/db.txt');

function seed($fileName) {
    $data = array(
        array(
            'fname' => 'Kamal',
            'lname' => 'Ahmmed',
            'roll' => '23'
        ),
        array(
            'fname' => 'Rohim',
            'lname' => 'Ahmmed',
            'roll' => '02'
        ),
        array(
            'fname' => 'Refuji',
            'lname' => 'Ahmmed',
            'roll' => '22'
        )
    );

    file_put_contents($fileName, serialize($data), LOCK_EX);
}

function genaretReport($fileName) {
    $students = unserialize(file_get_contents($fileName));
    
    return $students;
}

function addStudent($fn, $ln, $r, $fileName) {
    $students = unserialize(file_get_contents($fileName));

    $students[] = array(
        'fname' => $fn,
        'lname' => $ln,
        'roll' => $r,
    );

    file_put_contents($fileName, serialize($students), LOCK_EX);
}