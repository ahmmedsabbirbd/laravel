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

// print_r($products->getProducts());


$shop = new Shop($products->getProducts());
$shop->addShoped(12141);

print_r($shop->getShopeedProduct());