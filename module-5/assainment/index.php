<?php
  require_once "Template/header.php";
?>

<form class="max-w-md mx-auto bg-white p-8 mt-10 rounded-lg shadow-md" action="main.php" method="POST">
    <div class="mb-4">
      <label class="block text-gray-700 font-bold mb-2" for="name">
        Name
      </label>
      <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" type="text" placeholder="John Doe" required>
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 font-bold mb-2" for="email">
        Email
      </label>
      <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="email" placeholder="johndoe@example.com" required>
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Submit
      </button>
    </div>
</form>

<?php
  require_once "Template/footer.php";
?>
      
    
