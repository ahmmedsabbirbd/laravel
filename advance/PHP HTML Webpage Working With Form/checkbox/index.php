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
        // single checkbox
        // $privacy_policy = filter_input(INPUT_POST, 'privacy_policy', FILTER_SANITIZE_NUMBER_INT);
        // var_dump($privacy_policy);
        // ($privacy_policy) ? $privacy_policy = "checked" : $privacy_policy = "Not_checked";
        // echo <<<NEL
        // <span class="ml-2 text-gray-700">Remember me : {$privacy_policy}</span>
        // NEL;

        // multiple checkbox
        // $multipleCheckbox = filter_input(INPUT_POST, 'checkboxs', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        // var_dump($privacy_policy);
        function isChecked($value, $checkbox) {
            $multipleCheckbox = $_REQUEST['checkboxs'];

            if(isset($_REQUEST[$checkbox]) && is_array($_REQUEST[$checkbox]) && in_array($value, $_REQUEST[$checkbox])) {
                echo "checked";
            }
            
        }

        // ($privacy_policy) ? $privacy_policy = "checked" : $privacy_policy = "Not_checked";
        // echo <<<NEL
        // <span class="ml-2 text-gray-700">Remember me : {$privacy_policy}</span>
        // NEL;
    ?>

    <form class="max-w-md mx-auto bg-white p-8 mt-10 rounded-lg shadow-md" action="index.php" method="POST">
        <!-- single checkbox -->
        <!-- <label class="flex items-center">
            <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-600" name="privacy_policy" value="1" <?php echo $privacy_policy; ?>>
            <span class="ml-2 text-gray-700">Remember me</span>
        </label> -->

        <div class="flex flex-col">
            <label class="inline-flex items-center">
                <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-600" name="checkboxs[]" value="option_1" <?php isChecked('option_1', 'checkboxs') ?>>
                <span class="ml-2 text-gray-700">Option 1</span>
            </label>
            <label class="inline-flex items-center">
                <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-600" name="checkboxs[]" value="option_2" <?php isChecked('option_2', 'checkboxs') ?>>
                <span class="ml-2 text-gray-700">Option 2</span>
            </label>
            <label class="inline-flex items-center">
                <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-600" name="checkboxs[]" value="option_3" <?php isChecked('option_3', 'checkboxs') ?>>
                <span class="ml-2 text-gray-700">Option 3</span>
            </label>
        </div>


        <div class="flex items-center justify-between">
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
            Submit
          </button>
        </div>
    </form>

</body>
</html>
    
