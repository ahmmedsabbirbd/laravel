<?php

// echo getcwd(); // current path

// $entries = scandir(getcwd());

// foreach($entries as $entry) {
    
//     if("."!==$entry && ".."!==$entry) {
//         if(is_dir($entry)) {
//             echo "[D]: {$entry} \n";
//         } else {
//             echo "[F]: {$entry} \n";
//         }
//     } else {
//         echo "[E]: {$entry} \n";
//     }
// }

// count directory of current folder
function countCurrentDir($dir) {
    $i = 0;

    $entries = scandir(getcwd());
    foreach($entries as $entry) {
        if("."!==$entry && ".."!==$entry) {
            if(is_dir($entry)) {
                echo "[D]: {$entry} \n";
                $i++;
            } else {
                echo "[F]: {$entry} \n";
            }
        } else {
            echo "[E]: {$entry} \n";
        }
    }

    return $i;
}

// echo countCurrentDir(getcwd());

$entries = opendir(getcwd()); // opendir or scandir
// while(false !== $entry = readdir($entries)) {
//     echo $entry."\n";
// }
// echo PHP_EOL;
// echo readdir($entries).PHP_EOL;
// echo readdir($entries);



$entries = scandir(getcwd().DIRECTORY_SEPARATOR."module-6");

print_r($entries);