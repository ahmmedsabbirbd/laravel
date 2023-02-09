<?php 

// for loop
for($i=1; $i <=10; $i++) {
    for($j=1; $j <= $i; $j++) {
        echo "*";
    }
    echo $i.PHP_EOL;
}

echo PHP_EOL;

$i = 0;
while($i<10) {
    $i++;
    echo $i.PHP_EOL;
}

echo PHP_EOL;

$i = 0;
do {
    $i++;
    echo $i.PHP_EOL; 
} while($i < 10);

echo PHP_EOL;

// goto
echo "GOTO loop".PHP_EOL;
$i=0;
a: $i++;
echo $i.PHP_EOL;
if($i<10) goto a;