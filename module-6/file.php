<?php

// write 
// $file = fopen("data.txt","a");
// fwrite($file, "\tHellow 2");
// fclose($file);

// read 
$file = fopen("./data.txt","r");
$data = fgets($file, 4096);

echo $data;
fclose($file);