<?php
spl_autoload_register(function($fileName) {
    $path = str_replace("ProductManagement\\", "", $fileName);
    require_once "{$path}.php";
});