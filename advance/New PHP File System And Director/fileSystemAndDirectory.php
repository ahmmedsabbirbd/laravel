<?php

// count directory of current folder
// function countCurrentDir($dir) {
//     $i = 0;

//     $entries = scandir(getcwd());
//     foreach($entries as $entry) {
//         if("."!==$entry && ".."!==$entry) {
//             if(is_dir($entry)) {
//                 echo "[D]: {$entry} \n";
//                 $i++;
//             } else {
//                 echo "[F]: {$entry} \n";
//             }
//         } else {
//             echo "[E]: {$entry} \n";
//         }
//     }

//     return $i;
// }

class fileSystemAndDirectory {
    private $path;
    private $folder = [];
    private $file = [];
    private $childFolder = [];
    private $childFile = [];

    function __construct($currenDirectory) {
        $this->path = $currenDirectory;

        if(is_readable($this->path)) {
            $currentDirectory = scandir($this->path);

            foreach($currentDirectory as $singleDirectory) {
                if($singleDirectory !== "." && $singleDirectory !== "..") {
                    if(is_dir($this->path.DIRECTORY_SEPARATOR.$singleDirectory)) {
                        $this->folder[] = $singleDirectory;
                    } else {
                        $this->file[] = $singleDirectory;
                    }
                }
            }
        }
    }

    // public function accessChild($child) {
    //     if(is_readable($this->path.DIRECTORY_SEPARATOR.$child)) {
    //         $currentDirectory = scandir($this->path.DIRECTORY_SEPARATOR.$child);
            
    //         foreach($currentDirectory as $singleDirectory) {
    //             if($singleDirectory !== "." && $singleDirectory !== "..") { 
    //                 if(is_dir($this->path.DIRECTORY_SEPARATOR.$child.DIRECTORY_SEPARATOR.$singleDirectory)) {
    //                     $this->folder[] = $singleDirectory;
    //                 } else {
    //                     $this->file[] = $singleDirectory;
    //                 }
    //             }
    //         }
    //     }
    // }

    public function getFolder() {
        return $this->folder;
    }

    public function getFile() {
        return $this->file;
    }

    public function getChildFolder() {
        return $this->childFolder;
    }

    public function gChildetFile() {
        return $this->childFile;
    }
}

// currentDirectory
$laravel = new fileSystemAndDirectory(getcwd());
// $laravel->accessChild($laravel->getFolder()[1]);
$laravel = new fileSystemAndDirectory(getcwd().DIRECTORY_SEPARATOR.$laravel->getFolder()[1]);

print_r($laravel->getFolder());
print_r($laravel->getFile());