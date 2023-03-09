<?php
$file = "D:/laravel/laravel/module-6/f1.txt";

// old data
// $existingData = file_get_contents($file);
// $fopen = fopen($file, "w");
$fopen = fopen($file, "a");

//old data
// fwrite($fopen, $existingData);
// write fresh
fwrite($fopen, "Hi\n");
fwrite($fopen, "Kire\n");

fclose($fopen);