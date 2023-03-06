<?php
namespace ProductManagement\Products\ProductsInterfaces;

interface ProductsInterfaces {
    public function removeProuduct($productId);
    public function updateProuduct($productId, $productTitle, $productPrice);
    public function addProduct($productId, $productTitle, $productPrice);
}

interface addShopedInterface {
    public function addShoped($shopedId);
}