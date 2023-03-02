<?php

class Dir{
    private $directores=[];
    private $files=[];

    function __construct($path) {
        if(is_readable($path)) {
            $entry = scandir($path);

            foreach($entry as $e) {
                if("."!=$e && ".." != $e) {
                    if(is_dir($e)) {
                        array_push($this->directores, $e);
                        // echo $e;
                    } else {
                        // echo $e;
                        array_push($this->files, $e);
                    }
                }
            }
        }
    }

    function getDirectory() {
        return $this->directores;
    }
    
    function getFiles() {
        return $this->files;
    }
}
    
$directory = new Dir(getcwd());
print_r($directory->getDirectory());
print_r($directory->getFiles());