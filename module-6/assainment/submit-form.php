<?php
require_once "./SinglePhotoAdded.php";

try {
    // Check for form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        // photos
        $photos = new multiplePhotoAdded("profile-pic", "uploads/");

        // echo $photos->getAnyError();
        if($photos->getAnyError() == 1 && $name && $email && $password) {
            $photos->fileUploaded();
            echo $photos->getPhotosName();
            $password = md5($password);
            file_put_contents("users.csv", "{$name},{$email},{$password},{$photos->getPhotosName()} \n", FILE_APPEND);

            header("location: users.php");
        } else {
            echo "Some Error. Please submit from agin";
            header("location: users.php");
        }
    }
} catch(Exception $e) {
    echo $e->getMessage();
}