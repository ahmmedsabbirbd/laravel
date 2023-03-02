<?php header("X-XSS-Protection:0"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <?php
        // single files
        // if(is_array($_FILES['fileInput'])) {
            
        //     echo "<pre>";
        //     var_dump($_FILES['fileInput']);
        //     echo "</pre>";

        //     if(($_FILES['fileInput']['type'] == 'image/png' || $_FILES['fileInput']['type'] == 'image/jpg') && $_FILES['fileInput']['size'] < 2 * 1024 * 1024) {
        //         move_uploaded_file($_FILES['fileInput']['tmp_name'], './files/'.$_FILES['fileInput']['name']);
        //     }
        // }

        // multiles files
        if(is_array($_FILES['fileInput'])) {
            $typeCheck = [
                'image/png',
                'image/jpg',
                'image/jpeg',
            ];
            
            $totalFiles = count($_FILES['fileInput']['name']);
            
            // echo "<pre>";
            // var_dump($_FILES['fileInput']);
            // echo "</pre>";

            for($i = 0; $i < $totalFiles; $i++) {
                echo $_FILES['fileInput']['type'][$i];
                if(in_array($_FILES['fileInput']['type'][$i], $typeCheck) !== false && $_FILES['fileInput']['size'][$i] < 2 * 1024 * 1024) {
                    move_uploaded_file($_FILES['fileInput']['tmp_name'][$i], './files/'.$_FILES['fileInput']['name'][$i]);
                    echo true.$i;
                } else {
                    echo false.$i;
                }
            }
        }
         
    ?>

    <form class="max-w-md mx-auto bg-white p-8 mt-10 rounded-lg shadow-md" action="index.php" method="POST" enctype="multipart/form-data">
        <label class="block text-gray-700 font-bold mb-2" for="fileInput">
        Upload File
        </label>
        <input id="fileInput" name="fileInput[]" type="file" class="py-2 px-3 border border-gray-400 rounded-lg w-full">

        <label class="block text-gray-700 font-bold mb-2" for="fileInput_two">
        Upload File
        </label>
        <input id="fileInput_two" name="fileInput[]" type="file" class="py-2 px-3 border border-gray-400 rounded-lg w-full">


        <div class="flex items-center justify-between">
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
            Submit
          </button>
        </div>
    </form>
</body>
</html>
    
