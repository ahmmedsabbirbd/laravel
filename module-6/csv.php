<?php

$file = fopen("module-6/csv.txt", "r");

// $data = fgetcsv($file);
// $data1 = fgetcsv($file);

// print_r($data);
// print_r($data);
// print_r($data1);

// print_r($data = fgetcsv($file));

while($data = fgetcsv($file)) {
    print_r($data);
}