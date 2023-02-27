<?php
spl_autoload_register(function($fileName) {
    $path = str_replace('Assainment\\', "", $fileName);
    require_once "{$path}.php";
});