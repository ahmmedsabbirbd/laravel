<?php

//  12 If Else, Leap Years and How to Shortcut Complex Conditions
 
function year_check($year){
    if (((($year % 4) == 0) && ((($year % 100) != 0) || (($year %400) == 0))))
       print("It is a leap year"); 
    else
       print("It is not a leap year");
}

year_check(1900);