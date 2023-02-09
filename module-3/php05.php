<?php 

// 5. Continue and break between loops

// break in 6
for($i=1; $i <=10; $i++) {
    for($j=1; $j <= $i; $j++) {
        echo "*";
    }
    echo $i.PHP_EOL;

    if($i == 6) {
        break; 
    }
}

echo "====================\n";
// continue in 6
for($i=1; $i <=10; $i++) {
    if($i == 6) {
        continue; 
    }
    for($j=1; $j <= $i; $j++) {
        echo "*";
    }
    echo $i.PHP_EOL;
}