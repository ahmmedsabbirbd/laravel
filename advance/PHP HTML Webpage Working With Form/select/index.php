<?php header("X-XSS-Protection:0"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox </title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

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
        function displayOption(array $options) {
            foreach($options as $option) {
                printf("<option value='%s'>%s</option>", strtolower($option), $option);
            }
        }
        $foods = ['Apple', "Comla", "Banana"];


        function checkDisplay($checkBox, $value) {
            if(isset($_REQUEST[$checkBox]) && is_array($_REQUEST[$checkBox])) {
                $foodArray = filter_input(INPUT_POST, $checkBox, FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY);
                
                if(in_array(strtolower($value), $foodArray)) {
                    echo "checked";
                }
                
                var_dump($foodArray);
            }
        }

        checkDisplay('country', "Comla");
    ?>

    <form class="max-w-md mx-auto bg-white p-8 mt-10 rounded-lg shadow-md" action="index.php" method="POST">
        <!-- <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="country" name="country">
            <option disabled selected>Default</option>
            <?php // displayOption($foods); ?>
        </select> -->

        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight" id="country" name="country[]" multiple>
            <option disabled selected>Default</option>
            <?php displayOption($foods); ?>
        </select>

        <div class="flex items-center justify-between">
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
            Submit
          </button>
        </div>
    </form>

</body>
</html>
    
