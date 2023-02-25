<?php

function autoload($name) { 
    
    if(strpos($name, "floders_") !==false) {
        $fileName = str_replace("floders_","", $name);
        include "floders/{$fileName}.php";
    } else {
        include "{$name}.php";
    }

}

spl_autoload_register('autoload');

(new Data())->sayHellow();
(new Hi())->sayHellow();
(new floders_march())->sayX();