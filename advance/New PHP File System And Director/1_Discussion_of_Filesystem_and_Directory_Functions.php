<?php

echo getcwd(); // current path

$entries = scandir(getcwd());

foreach($entries as $entry) {
    
    if("."!==$entry && ".."!==$entry) {
        echo "It's all floader {$entry} \n";
    } else {
        echo "It's all hide floader {$entry} \n";
    }
}