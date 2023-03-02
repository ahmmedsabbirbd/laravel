<?php
$to = "ahmmedsabbirbd@gmail.com";
$from = "text@gmail.com";
$subject = "Test";
$body = "Hellow \n How are you";

$header = "From: {$from}\r\n";
echo "test";
echo mail($to, $subject, $body, $header);