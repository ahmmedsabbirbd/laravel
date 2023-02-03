<?php

//  16 More on switch case

$input = 'users.online';
$checked = null;
        
switch (true):
    case ($input === 'home'):
        $checked = 'ok 1';
        break;

    case (in_array($input , ['users.online', 'users.location', 'users.featured', 'users.browse', 'users.search', 'users.staff'])):
        $checked = 'ok 2';
        break;

    case ($input === 'forum'):
        $checked = 'ok 3';
        break;
endswitch;

echo $checked;


echo PHP_EOL;
// another case
$x = 2;
$y = 5;

switch(true) {
    case ($x == 2 && $y == 2):
        echo "First condition is match";
        break;
    case ($x == 2 && $y == 5):
        echo "Second condition is match";
        break;
}