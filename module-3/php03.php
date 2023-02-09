<?php 

// 3. More on Multiple Stepping in For Loops

for($i=0; $i <=100; $i++) {
    // echo (($i % 7) == 0) ? $i.PHP_EOL : '';
    // echo (($i % 11) == 0) ? $i.PHP_EOL : '';
}

for($i=0, $j=0; $i <=100; $i+=7, $j+=11) {
    echo $i.PHP_EOL;
    echo $j <= 100 ?  $j."\n" : '';
}