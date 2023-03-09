<?php
$old_date = date_create("3-1-2019 12:22:01 Asia/Dhaka");
print_r($old_date);
$old_date = $old_date->format("d:m:y h:i:s:a time_zone timezone_type");
print_r($old_date);