<?php

//  15 Another way to check condition

$day = "Monday";

switch ($day) {
  case "Monday":
    echo "Today is Monday.";
    break;
  case "Tuesday":
    echo "Today is Tuesday.";
    break;
  case "Wednesday":
    echo "Today is Wednesday.";
    break;
  default:
    echo "Today is another day.";
    break;
}

$color = "red";

switch($color) {
    case 'black':
        echo "${color} is favarate color.";
        break;
    case 'green':
        echo "${color} is favarate color.";
        break;
    case 'black':
    case 'red':
        echo PHP_EOL;
        echo "${color} is my bou favarate color.";
    break;
}