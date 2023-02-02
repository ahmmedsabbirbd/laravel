<?php

// 9 The magic of the printf function
printf('My name is %s %s', 'Sabbir', 'Ahmmed');
echo PHP_EOL;
printf('My name is %1$s %2$s', 'Sabbir', 'Ahmmed');
echo PHP_EOL;
printf('My name is %1$s %1$s', 'Sabbir', 'Ahmmed');
echo PHP_EOL;
printf('My name is %1$s. %1$s is a bad man.', 'Sabbir');
echo PHP_EOL;
printf('My name is %1$s. %1$s is a bad man.', 'Sabbir');

// bosomic
$x = 3.2323;
$y = 3234234.32;

echo PHP_EOL;
printf('This number is %.2f', $x);
echo PHP_EOL;
printf('This number is %.2f', $y);

echo PHP_EOL;
printf('This number is %010.2f', $x);
echo PHP_EOL;
printf('This number is %010.2f', $y);