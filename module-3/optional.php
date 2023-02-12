<?php
function greet(string $name, string $title = "Mrs. ") {
    echo "{$title} {$name} <br>";
}

greet('Sabbir', 'Md.');
echo PHP_EOL;
greet('Sabbir');

echo PHP_EOL;
// named argument
greet(title:"md ", name:"Sabbir");

echo PHP_EOL;
// argument check
function process($n1, $n2) {
    echo count(func_get_args());
}

process(3, 3);

echo PHP_EOL;
// unlimited argument
function unlimitedParameiiter(...$arg) {
    echo count(func_get_args());
}

unlimitedParameiiter(3, 32, 23, 3);

echo PHP_EOL;
// define input int output int
function squere(int $n) {
    return $n*$n;
}

echo squere(3);

echo PHP_EOL;

$visit_tors = 0;
// global value
function visit() {
    static $visit_tors;
    $visit_tors++;

    echo $visit_tors.PHP_EOL;
}

visit();
visit();