<?php

// make directory
// mkdir("mkdir_test",0777, true);

// sleep(3);
// // remove directory
// rmdir("mkdir_test");

// make directory
mkdir("mkdir_test",0777, true);
file_put_contents("mkdir_test/x.txt", "dsfadsf\ndds");

sleep(3);
// remove directory
unlink("mkdir_test/x.txt"); // file remove
rmdir("mkdir_test");