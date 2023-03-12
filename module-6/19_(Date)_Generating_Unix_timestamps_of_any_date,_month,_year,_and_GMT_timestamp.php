<?php

echo time();
echo PHP_EOL;

echo mktime(0,0,0,12,1,2018);
date_default_timezone_set("Asia/Dhaka");
echo PHP_EOL;

echo mktime(0,0,0,12,1,2018);
echo PHP_EOL;

echo (1543618800 - 1543600800) / (60 * 60);