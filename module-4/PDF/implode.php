<?php

// implode
$arrayOfName = array("My", "name", "is", "Sabbir");

$fullName = implode(' ', $arrayOfName);
echo "<pre>";
var_dump($fullName);
echo "</pre>";