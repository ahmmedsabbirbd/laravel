<?php 

// 15. Variable Scope in PHP Function

/*
// global scope
$name = 'Sabbir';

function doSomeThing() {
    global $name;
    echo $name;

    // echo $GLOBALS['name'];
}

doSomeThing();
*/

/*
// local scope
function doSomeThing() {
    $name = 'Sabbir';
    echo $name;
}

doSomeThing();
echo $name;
*/

function dosomeThink() {
    $i = 0;
    static $i;

    $i++;
    echo $i.PHP_EOL;
}

dosomeThink();
dosomeThink();
dosomeThink();
dosomeThink();
dosomeThink();