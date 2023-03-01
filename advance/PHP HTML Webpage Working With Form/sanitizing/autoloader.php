<?php
spl_autoload_register(function($fileName) {
    $path = str_replace('Sanitizing\\', "", $fileName);
    require_once "{$path}.php";
});