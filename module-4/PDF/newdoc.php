<?php

// double Quoted
$name = "Sabbir";
// as my wish in the text "StartDynamicFunction" 
$str = <<<"StartDynamicFunction"
    <h2>my name is {$name}</h2>
StartDynamicFunction;
echo $str;