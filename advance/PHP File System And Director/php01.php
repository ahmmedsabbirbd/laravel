<?php
// echo getcwd(); // current directory

$entry = scandir(getcwd());

// print_r($entry);

foreach($entry as $e) {
    if("."!=$e && ".." != $e) {
        echo "[d] {$e} \n";
    } else {
        echo "[f] {$e} \n";
    }
}

// opendir();
