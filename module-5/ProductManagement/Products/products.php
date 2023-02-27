<?php
namespace ProductManagement\Products;
require_once "./autoloder.php";


use \ProductManagement\Products\ProductsInterfaces\ProductsInterfaces;
class Products implements ProductsInterfaces{
    protected $products;

    public function __construct($array) {
        $this->products = $array;
    }
    
    public function getProducts() {
        return $this->products;
    }

    public function removeProuduct($productId) {
        $remvoeProduct = array_search($productId, array_column($this->products, 'id'));

        if ($remvoeProduct !== false) {
            unset($this->products[$remvoeProduct]);
        } else {
            echo "Products not find";
        }
    }

    public function updateProuduct($productId) {
        $updateProduct = array_search($productId, array_column($this->products, 'id'));

        if ($updateProduct !== false) {
            $products[$productId]['name'] = 'New Product x Name';
            $products[$productId]['price'] = 29.99;
            print_r($products);
            $this->products[$productId] = $products;
        } else {
            echo "Products not update";
        }
    }

    // abstract public function getShopeedProduct(); i want need abstract
}