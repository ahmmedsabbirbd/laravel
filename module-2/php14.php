<?php

//  14 Working with Ternary Operators and Nested Ternary Operators

$age = 25;
$citizenship = "USA";

$canVote = ($age >= 18) ? (($citizenship === "USA") ? "Yes" : "No") : "No";

echo "Can you vote? $canVote";