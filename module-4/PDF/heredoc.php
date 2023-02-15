<?php

// double Quoted
$name = "Sabbir";
$str = <<<Demo
    <h2>my name is {$name}</h2>
Demo;
echo $str;