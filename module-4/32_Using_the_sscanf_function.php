<?php

$name = "Sabbir Ahmmed 01712923446";
$person = sscanf($name, "%s %s %11s");
$person = sscanf($name, "%s %s %11s", $fname, $lname, $phone);
print_r($fname);