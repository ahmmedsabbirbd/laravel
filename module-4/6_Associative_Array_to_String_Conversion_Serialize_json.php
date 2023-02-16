<?php

$student = array(
    "name" => "Rohim",
    "age" => "23",
    "class" => "4",
);

printf('%s %s', $student['name'], $student['age']);

$serialized = serialize($student);

$unSerialized = unserialize($serialized);

print_r($unSerialized);



$jsonConvert = json_encode($student);
echo $jsonConvert;

$arrayConvert = json_decode($jsonConvert);
print_r($arrayConvert);