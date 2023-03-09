<?php
// 5_(File)_Discussion_of_file_put_contents_and_race_conditions_and_file_locks

$file = "D:/laravel/laravel/module-6/file_put_contents.txt";

file_put_contents($file, "j", FILE_APPEND | LOCK_EX);

echo file_get_contents($file);