<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Login Form</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.1.2/tailwind.min.css">
</head>
<body class="bg-gray-100">

   <div class="flex flex-col justify-center items-center min-h-screen">
    <?php
        if(isset($_GET['name']) && $_GET['name']) {
            echo "<div class='font-bold text-xl'>You Name: {$_GET['name']} {$_GET['lastname']}</div>";
        } else {
            header("Location: login.php");
        }
    ?>
 </div>

</body>
</html>