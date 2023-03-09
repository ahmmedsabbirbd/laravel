<?php
$file = "D:/laravel/laravel/module-6/f1.txt";

echo is_readable($file).PHP_EOL;
$fopen = fopen($file, 'r'); //fopen

while($line = fgets($fopen)) {
    echo $line;
}

rewind($fopen);

while($line = fgets($fopen)) {
    echo $line;
}


fclose($fopen); //fclose

// most popular way to read
$data = file($file);
print_r($data);

// most popular way to read
$data1 = file_get_contents($file);
print_r($data1);