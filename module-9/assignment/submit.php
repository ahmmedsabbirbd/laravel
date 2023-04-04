<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['submit'])) {
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        if(!empty($name) || !empty($subject) || !empty($message)){
            echo "Thank you for contacting us!";
        }else{
            echo "All filed is required";
        }
    }
}
?>