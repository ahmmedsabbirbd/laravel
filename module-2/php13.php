<?php

//  13 Nested If Else and Readability of Code

$age = 25;

if ($age >= 18) {
    if ($age >= 21) {
      echo "You can buy alcohol.";
    } else {
      echo "You can vote, but not buy alcohol.";
    }
  } else {
    echo "You're too young to vote or buy alcohol.";
}

echo PHP_EOL;

if ($age >= 18 && $age >= 21) {
    echo "You can buy alcohol.";
} elseif ($age >= 18) {
    echo "You can vote, but not buy alcohol.";
} else {
    echo "You're too young to vote or buy alcohol.";
}