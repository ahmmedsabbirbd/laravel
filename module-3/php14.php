<?php 

// 14. Recursive Functions

$staticNumber = 10;
for($i=0;$i<10;$i++) {
    echo $i.PHP_EOL;
    
    static $staticNumber;
    $staticNumber += $i;
    echo $staticNumber.PHP_EOL;
}

