<?php
4_(File)_Opening_files_in_different_modes

$file = "D:/laravel/laravel/module-6/f1.txt";

$fopen = fopen($file, "a+");

fwrite($fopen, "1\n");

fclose($fopen);