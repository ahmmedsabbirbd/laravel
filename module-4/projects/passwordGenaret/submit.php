<?php


    if($_SERVER['REQUEST_METHOD']) {
        // echo "<pre>";
        // print_r($_POST);
        // echo "</pre>";

        $passwordlength = $_POST['password-length'];
        $generatedPassword = $POST['text_an'];

        // password genaretor
        $az = 'abcdefghijklmnopqrstuvwzxxxasdf1234~~32%!#*+-git yz0123456789sfgsvsdvewfsdvasweafeavc';
        $az = str_split($az);
        
        $myPassword = '';
        for($i=0; $i<$passwordlength; $i++) {
            shuffle($az);
            $randNumber = rand(0,count($az));
            $myPassword .=$az[$randNumber];
        }
    } else {
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full flex items-center">
    <div class="w-full max-w-md mx-auto"> 
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="generated-password">
                Generated Password
            </label>

            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="generated-password" name="generated-password" type="text" readonly value=<?php echo $myPassword ?>>
        </div>  
    </div>

</body>
</html>