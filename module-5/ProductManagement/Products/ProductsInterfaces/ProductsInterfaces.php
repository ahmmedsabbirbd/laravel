<?php
namespace ProductManagement\Products\ProductsInterfaces;

interface ProductsInterfaces {
    public function removeProuduct($productId);
    public function updateProuduct($productId);
}

interface addShopedInterface {
    public function addShoped($shopedId);
}