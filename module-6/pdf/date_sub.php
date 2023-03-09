<?php
$date = date_create("3-1-2019 12:22:01 Asia/Dhaka");

date_sub($date, date_interval_create_from_date_string("1 year + 2 hours + 38 minutes"));
$date = date_format($date, "d:m:y h:i:s_a");
print_r($date);