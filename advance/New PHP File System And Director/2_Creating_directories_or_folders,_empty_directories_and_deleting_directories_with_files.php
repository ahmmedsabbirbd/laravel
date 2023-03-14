<?php

// make directory
mkdir("mkdir_test",0777, true);

// sleep(3);
// // remove directory
// rmdir("mkdir_test");

// make directory
// mkdir("mkdir_test",0777, true);
file_put_contents("mkdir_test/x.bat", "dsfadsf\ndds");

// sleep(3);
// remove directory
// unlink("mkdir_test/x.txt"); // file remove
// rmdir("mkdir_test");

function emtryFoldorDelete($cwd) {
    if(is_dir($cwd)) {
        $currentWoringDirectory = scandir($cwd);
        $currentFilesIsemtry = true;

        foreach($currentWoringDirectory as $singleDirectory) {
            if($singleDirectory !== "." && $singleDirectory !== "..") {
                $currentFilesIsemtry = false;
                echo $singleDirectory.PHP_EOL;
            }
        }
        
        if($currentFilesIsemtry) {
            rmdir($cwd).PHP_EOL;
            echo "You Directory is deleted {$cwd}";
        }
    }
}

// emtryFoldorDelete(getcwd().DIRECTORY_SEPARATOR."text");