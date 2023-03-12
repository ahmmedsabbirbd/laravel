<?php
ini_set('display_errors', 0);
error_reporting(0);
ini_set('memory_limit', "1M");


register_shutdown_function('CustomFatalErrorHanding');

function CustomFatalErrorHanding() {
    // echo "Error [{$error_severity}]: {$msg} in {$file} on line number {$line} \n \n \n \n".PHP_EOL;
    $error = error_get_last();

    if($error) {
        echo "x";
    }
}

echo str_repeat("x", 21324567543*2);