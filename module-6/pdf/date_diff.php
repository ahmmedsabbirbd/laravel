<?php
$old_date = date_create("3-1-2019 12:22:01 Asia/Dhaka");
$new_date = date_create("3-1-2012 11:20:10 Asia/Dhaka");

$date_diff = date_diff($old_date, $new_date);
print_r($date_diff);
$date_diff = $date_diff->format("%R_%a_days_%h_hours_%i_minutes_%s_Second days");
print_r($date_diff);