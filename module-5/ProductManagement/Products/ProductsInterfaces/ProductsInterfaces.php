<?php
namespace ProductManagement\Products\ProductsInterfaces;
require_once "./autoloder.php";

interface ProductsInterfaces {
    public function removeProuduct($productId);
    public function updateProuduct($productId);
}

interface addShopedInterface {
    public function addShoped($shopedId);
}