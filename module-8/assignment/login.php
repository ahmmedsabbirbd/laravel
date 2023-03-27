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
       <h1 class="text-3xl font-bold mb-4">Login Form</h1>
       
       <?php
     // Check if form is submitted
     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
         $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
         $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
         $password = md5($password);
         // Check if fields are empty
         if (empty($email) || empty($password)) {
           echo '<p class="text-red-500 mb-2">Email and password are required.</p>';
       } else {
         // Connect to the database
           $servername = "localhost";
           $username = "root";
           $db_password = "";
           $dbname = "axel_landing_page";
           
           try {
               $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $db_password);
               $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
               
               $sql = "SELECT * FROM `html_assignment` WHERE email = :value1 AND password = :value2";
               $stmt = $conn->prepare($sql);
               
               $stmt->bindParam(':value1', $email);
               $stmt->bindParam(':value2', $password);

               $stmt->execute();
               $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

                if($result) {
                    header("Location: welcome.php?name={$result[0]['fn']}");
                } else {
                    echo '<p class="text-red-500 mb-2">Email and password are not matched.</p>';
               }

               $conn = null;
           } catch(PDOException $e) {
               echo "Connection failed: " . $e->getMessage();
               exit;
           } finally {
               // Close the database connection
               $conn = null;
           }
       }
     }
   ?>

   <form method="post" action="login.php" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
     <div class="mb-4">
       <label class="block text-gray-700 font-bold mb-2" for="email">
         Email Address
       </label>
       <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" name="email" placeholder="Email Address" required>
     </div>
     <div class="mb-6">
       <label class="block text-gray-700 font-bold mb-2" for="password">
         Password
       </label>
       <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" name="password" placeholder="Password" required>
     </div>
     <div class="flex items-center justify-between">
       <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
         Sign In
       </button>
     </div>
   </form>
 </div>

</body>
</html>