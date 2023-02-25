<?php

require_once('products.php');
require_once('members.php');

$prouctsList = $products = [
    ['id' => 12143, 'name' => 'Product 1', 'price' => 10.99],
    ['id' => 12141, 'name' => 'Product 2', 'price' => 5.99],
    ['id' => 12151, 'name' => 'Product 3', 'price' => 7.99],
];

$products = new Products($prouctsList);

// print_r($products->getProducts());


$shop = new Shop($products->getProducts());
$shop->addShoped(12143);

print_r($shop->getShopeedProduct());