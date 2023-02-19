<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="search.php" method="post">
    Name: <input type="text" name="name"><br>
    <input type="submit" value="Submit">
    </form>

</body>
</html>

<?php
// work for get
// $name = $_GET['name'];
// $email = $_GET['email'];

// work for post
// $name = $_POST['name'];
// $email = $_POST['email'];

// work for both
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];



$name = isset($name) ? $name : '';
echo "Your name is {$name}<br>";

name_search($name);
function name_search($name) {
    $db = array('korim', 'sabbir');
    $searchResult = array_search($name, $db);

    if($searchResult != 'false') {
        echo "Found in database and index {$searchResult}";
    } else {
        echo "not Found in database";
    }
}