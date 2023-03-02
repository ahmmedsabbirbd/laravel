<?php

// create
// mkdir("advance\PHP File System And Director/text", 0777, true);

// remove
// rmdir("advance\PHP File System And Director/text");

// create
file_put_contents("advance\PHP File System And Director/text/f.txt", "hellow");

sleep(5);
// rmdir("advance\PHP File System And Director/text");
unlink("advance\PHP File System And Director/text/f.txt");
