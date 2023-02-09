<?php 

// 12. Dividing a large function into smaller functions

//
function doLargeTask() {
    echo "Step A Done\n";
    echo "Step B Done\n";
    echo "Step C Done\n";
    echo "Step D Done\n";
    echo "Step E Done\n";
}

doLargeTask();
// is not debug friendly;


echo PHP_EOL."Proper way".PHP_EOL;

function doTaskA() {
    echo "Step A Done\n";
}

function doTaskB() {
    echo "Step B Done\n";
}

function doTaskC() {
    echo "Step C Done\n";
}

function doTaskD() {
    echo "Step D Done\n";
}

function doTaskE() {
    echo "Step E Done\n";
}

function doLargeTask1() {
    doTaskA();
    doTaskB();
    doTaskC();
    doTaskD();
    doTaskE();
}

doLargeTask1(); // dubug friendly