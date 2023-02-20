
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form Submission Result</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-gray-100">
  <?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_FILES['file'])) {
        $target_file = "uploads/" . basename($_FILES['file']['name']);
        $upload_ok = 1;
        $image_file_type = strtolower(pathinfo($target_file)['extension']);
    
        if (file_exists($target_file)) {
            echo <<<Demo
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">Sorry, file already exists.</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                </span>
                </div>
            Demo;
            $upload_ok = 0;
            exit;
        }
    
        if ($_FILES['file']['size'] > 100000) {
            echo <<<Demo
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">Sorry, your file is too large.</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                </span>
                </div>
            Demo;
            $upload_ok = 0;
            exit;
        }
    
        $allowed_file_types = array("jpg", "png", "jpeg", "gif");
        if(!in_array($image_file_type, $allowed_file_types)) {
            echo <<<Demo
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">Sorry, only JPG, JPEG, PNG & GIF files are allowed.</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                </span>
                </div>
            Demo;
            $upload_ok = 0;
            exit;
        }
    
        if ($upload_ok == 0) {
            echo <<<Demo
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">Sorry, your file was not uploaded.</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                </span>
                </div>
            Demo;
            exit;
        } else {
            if (!move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
                echo "Sorry, there was an error uploading your file.";
                exit;
            }
        }
    }

} else {
    echo "Please send 'POST' method";
    exit;
}
?>
    <div class="container mx-auto my-8">
      <div class="bg-white rounded-lg shadow-lg p-8">
        <h1 class="text-2xl font-bold mb-4">Form Submission Result</h1>
        <p class="mb-4">Thank you for submitting the form! Here is the data you entered:</p>
        <ul class="list-disc ml-8">
          <li><strong>Name:</strong> <?php echo $_POST['name']; ?></li>
          <li><strong>Email:</strong> <?php echo $_POST['email']; ?></li>
          <li><strong>Message:</strong> <?php echo $_POST['message']; ?></li>
          <li><strong>Images:</strong> <img src=<?php echo $target_file;?> style="max-width: 500px;" alt=""></li>
        </ul>
      </div>
    </div>
  </body>
</html>
