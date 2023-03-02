<?php
    include_once "./inc/function.php";
    $task = $_GET['task'] ?? '';
    if("seed" == $task) {
        seed(DB_NAME);
    }

    if($_SERVER['REQUEST_METHOD'] == "POST") {

        $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
        $lname = filter_input(INPUT_POST, 'Lname', FILTER_SANITIZE_STRING);
        $roll = filter_input(INPUT_POST, 'roll', FILTER_SANITIZE_NUMBER_INT);
        
        addStudent($fname, $lname, $roll, "./data/db.txt");
        header('location: index.php?task=report');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <?php
        include_once "./inc/templates/nav.php";
    ?>

    <?php if("report" == $task): ?>
    <table class='table'>
        <thead>
            <tr>
                <th scope='col'>First</th>
                <th scope='col'>Last</th>
                <th scope='col'>Roll</th>
                <th scope='col'>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
                $students = genaretReport("./data/db.txt");

                foreach($students as $student) { 
                ?>
                    <tr>
                        <?php 
                        printf("<td>%s</td>", $student['id']);
                        printf("<td>%s</td>", $student['fname']);
                        printf("<td>%s</td>", $student['fname']);
                        printf("<td>%s</td>", $student['roll']);
                        // printf("<td><a href='./index.php?edit=%s&id=%s'>Edit</a> | <a href='./index.php?delete=%s&id=%s'>Delete</a></td>", );
                        ?>
                    <tr>
                <?php
                }
            ?>
            
        </tbody>
    </table>
    <?php endif; ?>


    <?php
        if("add" == $task):?>
        <form action="./index.php?report" method="POST">
            <input type="text" placeholder="fname" name="fname">
            <input type="text" placeholder="lname" name="lname">
            <input type="number" placeholder="roll" name="roll">

            <button type="submit">submit</button>
        </form>
    <?php endif; ?>
</body>
</html>