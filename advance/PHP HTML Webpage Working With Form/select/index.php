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

    require_once('./select.php');

        $foods = ['Apple', "Comla", "Banana"];


        $foodArray = filter_input(INPUT_POST, 'country', FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY);
        var_dump($foodArray);
        if(!$foodArray) {
            $foodArray = [];
        } 
    ?>

    <form class="max-w-md mx-auto bg-white p-8 mt-10 rounded-lg shadow-md" action="index.php" method="POST">
        <!-- <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="country" name="country">
            <option disabled selected>Default</option>
            <?php // displayOption($foods); ?>
        </select> -->

        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight" id="country" name="country[]" multiple>
            <option disabled selected>Default</option>
            <?php displayOption($foods, $foodArray); ?>
        </select>

        <div class="flex items-center justify-between">
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
            Submit
          </button>
        </div>
    </form>

    <style>
        [checked] {
            background: red !important;
        }
    </style>
</body>
</html>
    
