<?php

// Convert timestamp to local time
date_default_timezone_set('Asia/Dhaka');
$timestamp = date_timestamp_get(date_create()); // Unix timestamp for Feb 20, 2022 12:00:00 AM UTC
$local_time = date('Y-m-d H:i:s', $timestamp);
echo "current time in bangladesh : ".$local_time.PHP_EOL;

date_default_timezone_set('Asia/Kolkata');
$timestamp = date_timestamp_get(date_create()); // Unix timestamp for Feb 20, 2022 12:00:00 AM UTC
$local_time = date('Y-m-d H:i:s', $timestamp);
echo "current time in India : ".$local_time.PHP_EOL;