<?php

$name = "Sabbir Ahmmed,gadah Ki re";

$parts = explode(' ', $name);
print_r($parts);

$nameJoin = join(' ', $parts);
echo $nameJoin.PHP_EOL;

$part5 = preg_split("/ |,|a/", $name);
print_r($part5);