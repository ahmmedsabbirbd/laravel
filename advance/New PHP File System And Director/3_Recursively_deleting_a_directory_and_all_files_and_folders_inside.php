<?php

// make directory
// mkdir("mkdir_test/f1/f2",0777, true);
// file_put_contents("mkdir_test/text.txt", "dsfadsf\ndds");
// file_put_contents("mkdir_test/f1/text.txt", "dsfadsf\ndds");
// file_put_contents("mkdir_test/f1/text1.txt", "dsfadsf\ndds");
// file_put_contents("mkdir_test/f1/f2/text.txt", "dsfadsf\ndds");
// file_put_contents("mkdir_test/f1/f2/text1.txt", "dsfadsf\ndds");

function emtryFoldorDelete($cwd) {
    if(is_dir($cwd)) {
        $currentWoringDirectory = scandir($cwd);

        foreach($currentWoringDirectory as $singleDirectory) {
            if($singleDirectory !== "." && $singleDirectory !== "..") {
                // echo $singleDirectory.PHP_EOL;

                $path = $cwd.DIRECTORY_SEPARATOR.$singleDirectory;
                if(is_dir($path)) {
                    emtryFoldorDelete($path);
                } else {
                    unlink($path);
                }
            }
        }
        
        rmdir($cwd).PHP_EOL;
    }
}

emtryFoldorDelete(getcwd().DIRECTORY_SEPARATOR."mkdir_test");