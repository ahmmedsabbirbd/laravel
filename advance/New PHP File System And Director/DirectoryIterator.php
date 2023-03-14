<?php

$directory = new DirectoryIterator("./");
foreach($directory as $file) {
    if($directory->isDot()) {
        continue;
    }

    if($directory->isDir()) {
        // echo $file.PHP_EOL;
    }

    if($directory->isFile()) {
        echo $file.PHP_EOL;
        echo $directory->getExtension().PHP_EOL;
        echo $directory->getATime().PHP_EOL;
    }
}

