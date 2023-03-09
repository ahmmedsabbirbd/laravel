<?php

$timestamp1 = 1613803123; // first timestamp
$timestamp2 = 1613892723; // second timestamp

$date1 = new DateTime();
$date1->setTimestamp($timestamp1);


$date2 = date_create();
$date2->setTimestamp(date_timestamp_get($date2));

$interval = $date1->diff($date2);

print_r($interval);
echo $interval->format('%d days, %h hours, %i minutes, %s seconds');
