<?php

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "axel_landing_page";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check for form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data
        $fn = filter_input(INPUT_POST, 'fn', FILTER_SANITIZE_STRING);
        $ln = filter_input(INPUT_POST, 'ln', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'confirm_password', FILTER_SANITIZE_STRING);
        $password = md5($password);

        if($fn && $ln && $email && $password) {
            $stmt = $conn->prepare("INSERT INTO `html_assignment` (`fn`, `ln`, `email`, `password`) VALUES (?,?,?,?)");
            $stmt->execute([$fn, $ln, $email, $password]);

            echo "Data inserted successfully";
            header("Location: login.php");
        }  else {
            echo "Please fill all inputs";
        }
    }
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
} finally {
    // Close the database connection
    $conn = null;
}
?>