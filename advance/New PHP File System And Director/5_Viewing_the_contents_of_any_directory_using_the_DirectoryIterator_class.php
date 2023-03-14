<?php

// make directory
// mkdir("mkdir_test/f1/f2",0777, true);
// file_put_contents("mkdir_test/text.txt", "dsfadsf\ndds");
// file_put_contents("mkdir_test/f1/text.txt", "dsfadsf\ndds");
// file_put_contents("mkdir_test/f1/text1.txt", "dsfadsf\ndds");
// file_put_contents("mkdir_test/f1/f2/text.txt", "dsfadsf\ndds");
// file_put_contents("mkdir_test/f1/f2/text1.txt", "dsfadsf\ndds");

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

