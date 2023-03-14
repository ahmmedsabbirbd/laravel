<?php

// make directory
// mkdir("mkdir_test/f1/f2",0777, true);
// file_put_contents("mkdir_test/text.txt", "dsfadsf\ndds");
// file_put_contents("mkdir_test/f1/text.txt", "dsfadsf\ndds");
// file_put_contents("mkdir_test/f1/text1.txt", "dsfadsf\ndds");
// file_put_contents("mkdir_test/f1/f2/text.txt", "dsfadsf\ndds");
// file_put_contents("mkdir_test/f1/f2/text1.txt", "dsfadsf\ndds");

$directory = new RecursiveDirectoryIterator("./", RecursiveDirectoryIterator::SKIP_DOTS);
$files = new RecursiveIteratorIterator($directory);

foreach($files as $file) {
    if(strpos($file->getPath(), "git")) {
        continue;
    }

    // echo $file->getPath()."/".$file->getPathname();
    $pathName = str_replace("\\", "/", $file->getPath());
    if($pathName == "./advance/New PHP File System And Director") {
        file_put_contents($pathName."/text.txt", "test \n", FILE_APPEND);
    }
}