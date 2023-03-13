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
            $password = md5($password);
            
            //time 
            date_default_timezone_set("Asia/Dhaka");
            $time = new DateTime(); 
            $time = date_format($time, "h:i:sa d_M_Y");
            
            file_put_contents("users.csv", "{$time}, {$name},{$email},{$password},{$photos->getPhotosName()} \n", FILE_APPEND);

            header("location: users.php");
        } else {
            echo "Some Error. Please submit from agin";
        }
    }
} catch(Exception $e) {
    echo $e->getMessage();
}