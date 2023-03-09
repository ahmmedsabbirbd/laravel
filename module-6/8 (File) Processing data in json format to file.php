<?php
// 5_(File)_Discussion_of_file_put_contents_and_race_conditions_and_file_locks

$file = "D:/laravel/laravel/module-6/students.json";

$students = array(
    array("name" => "John", "age" => 20),
    array("name" => "Jane", "age" => 21),
    array("name" => "Bob", "age" => 22)
);

$students = json_encode($students);

file_put_contents($file, $students, LOCK_EX);

$data = file_get_contents($file);
$data = json_decode($data, true);

print_r($data);
print_r($students);

// foreach($data as $student) {    
//     foreach($student as $SingleStudent) {
//         print_r($SingleStudent.PHP_EOL);
//     }
    
//     echo PHP_EOL;
// }