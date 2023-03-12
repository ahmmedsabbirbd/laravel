<?php
// error_reporting(0);
function CustomErrorHanding($error_severity, $msg, $file, $line) {
    echo "Error [{$error_severity}]: {$msg} in {$file} on line number {$line} \n \n \n \n".PHP_EOL;
}

set_error_handler('CustomErrorHanding');

echo substr([3, 2],"hasd");