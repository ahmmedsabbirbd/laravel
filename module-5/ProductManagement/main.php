<?php
namespace ProductManagement;
require_once 'autoloder.php';

use \ProductManagement\Products\Products;
use ProductManagement\Products\Shop\Shop;


$prouctsList = $products = [
    ['id' => 12143, 'name' => 'Product 1', 'price' => 10.99],
    ['id' => 12141, 'name' => 'Product 2', 'price' => 5.99],
    ['id' => 12151, 'name' => 'Product 3', 'price' => 7.99],
];

$products = new Products($prouctsList);

// $shop = new Shop($products->getProducts());
// $shop->addShoped(12141);

// print_r($shop->getShopeedProduct());

if($_SERVER['REQUEST_METHOD'] == "GET" && $_GET['delete']) {
    $products->removeProuduct($_GET['delete']);
}


if($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_FLOAT);
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_STRING);
    $products->addProduct($id, $name, $price);
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog</title>
    <!-- Include the Tailwind CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.7/tailwind.min.css" />
  </head>
  <body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-white shadow-lg">
      <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
          <div class="flex-shrink-0 flex items-center">
            <a href="#" class="font-bold text-xl text-gray-800">Blog</a>
          </div>
          <div class="hidden sm:block sm:ml-6">
            <ul class="flex space-x-4">
              <li><a href="#" class="text-gray-800 hover:text-gray-700">Home</a></li>
              <li><a href="#" class="text-gray-800 hover:text-gray-700">About</a></li>
              <li><a href="#" class="text-gray-800 hover:text-gray-700">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- Main content area -->
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <form action="main.php" method="POST">
        <div class="mb-4">
          <label class="font-bold text-gray-800" for="id">ID:</label>
          <input class="border-2 border-gray-200 p-2 w-full" type="text" name="id" id="id" />
        </div>
        <div class="mb-4">
          <label class="font-bold text-gray-800" for="name">Product Name:</label>
          <input class="border-2 border-gray-200 p-2 w-full" type="text" name="name" id="name" />
        </div>
        <div class="mb-4">
          <label class="font-bold text-gray-800" for="email">Price:</label>
          <input class="border-2 border-gray-200 p-2 w-full" type="text" name="text" id="text" />
        </div>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Submit</button>
      </form>

      <div class="px-4 py-6 sm:px-0 flex gap-10 flex-wrap">
        <!-- Blog post 1 -->
        <?php foreach($products->getProducts() as $kes => $product) { ?>
            <div class="max-w-sm bg-white rounded-lg shadow-lg overflow-hidden mb-6">
                <div class="p-6">
                    <?php 
                        printf("<h2 class='text-xl font-bold text-gray-800 mb-2'>%s</h2>", $product['name']);
                        printf("<p class='text-gray-700 leading-relaxed mb-4'>Price: $%s</p>", $product['price']);
                        printf("<a href='./main.php?delete=%s' class='text-indigo-500 hover:text-indigo-400 font-bold'>Remove</a>", $product['id']);
                    ?>
                </div>
            </div>
        <?php } ?>

      </div>

        <!-- Footer -->
<footer class="bg-gray-800 text-white">
  <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <div class="flex justify-center space-x-6">
      <a href="#" class="text-gray-400 hover:text-white">
        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
          <path
            fill-rule="evenodd"
            d="M19.293 5.293a1 1 0 011.414 0l.707.707a1 1 0 010 1.414l-9.9 9.9a1 1 0 01-.725.304H9.618l-1.146 1.146a1 1 0 01-1.414-1.414L9.204 16H6a1 1 0 01-1-1V8a1 1 0 011-1h13a1 1 0 01.707.293zM17 7v6.586l-5.293-5.293a1 1 0 00-1.414 0l-.707.707a1 1 0 000 1.414L14.586 16H13V8a1 1 0 00-1-1H8v10h4.618l1.146-1.146a1 1 0 011.414 1.414L10.796 18H17a1 1 0 001-1V7a1 1 0 00-1-1h-2z"
            clip-rule="evenodd"
          />
        </svg>
      </a>
      <a href="#" class="text-gray-400 hover:text-white">
        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
          <path
            fill-rule="evenodd"
            d="M17 3a4 4 0 014 4v10a4 4 0 01-4 4H7a4 4 0 01-4-4V7a4 4 0 014-4h10zm-5.5 5a2.5 2.5 0 110 5 2.5 2.5 0 010-5zM17 13a1 1 0 100-2 1 1 0 000 2z"
            clip-rule="evenodd"
          />
        </svg>
      </a>
      </div>
    <div class="mt-8 flex justify-center space-x-6">
      <a href="#" class="text-gray-400 hover:text-white">
        About
      </a>

      <a href="#" class="text-gray-400 hover:text-white">
        Blog
      </a>

      <a href="#" class="text-gray-400 hover:text-white">
        Jobs
      </a>

      <a href="#" class="text-gray-400 hover:text-white">
        Press
      </a>

      <a href="#" class="text-gray-400 hover:text-white">
        Accessibility
      </a>

      <a href="#" class="text-gray-400 hover:text-white">
        Partners
      </a>
    </div>
    <div class="mt-8">
      <p class="text-center text-gray-400">
        &copy; 2023 My Awesome Company, Inc. All rights reserved.
      </p>
    </div>
  </div>
</footer>