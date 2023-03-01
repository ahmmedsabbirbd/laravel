<?php

// checked
// function displayOption(array $options) {
//     foreach($options as $option) {
//         printf("<option value='%s'>%s</option>", strtolower($option), $option);
//     }
// }

// $foods = ['Apple', "Comla"];

// function checkDisplay($checkBox) {
//     if(isset($_REQUEST[$checkBox]) && $_REQUEST[$checkBox] != '') {
//         printf("Your value %s", filter_input(INPUT_POST, $checkBox, FILTER_SANITIZE_STRING));
//     }
// }

// checkDisplay('country');

// multiple checked
function displayOption(array $options, $foodArray) {
    
    foreach($options as $option) {
        $selected = '';
        if(in_array(strtolower($option), $foodArray)) {
            $selected = "checked";
            echo $selected;
        }
        printf("<option value='%s' %s>%s</option>", strtolower($option), $selected, $option);
    }

}