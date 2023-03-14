<?php

function copyDir($sorce, $destination) {
    $sorce = rtrim($sorce, "/");
    $destination = rtrim($destination, "/");

    if(!file_exists($destination)) {
        mkdir($destination);
    }

    foreach(scandir($sorce) as $file) {
        if("." != $file && ".." !=$file)  {
            $sorcePath = $sorce.DIRECTORY_SEPARATOR.$file;
            $destinationPath = $destination.DIRECTORY_SEPARATOR.$file;
            
            if(is_dir($sorcePath)) {
                copyDir($sorcePath, $destination);
            } else {
                copy($sorcePath, $destinationPath);
            }
        }
    }
}
    
$sorce = getcwd().DIRECTORY_SEPARATOR."/advance/";
$destination = getcwd().DIRECTORY_SEPARATOR."/advance/copy";

copyDir($sorce, $destination);

