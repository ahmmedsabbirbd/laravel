<?php
namespace ProductManagement\Products\Shop;
require_once "./autoloder.php";

use \ProductManagement\Products\products;
use \ProductManagement\Products\ProductsInterfaces\addShopedInterface;

class Shop extends Products implements addShopedInterface {
    private $shopedProduct;

    public function __construct($array) {
        $this->shopedProduct = [];
        $this->products = $array;
    }

    public function addShoped($shopedId) {
        $shopedProduct = array_search($shopedId, array_column(parent::getProducts(), 'id'));
        
        if ($shopedProduct !== false) {
            $this->shopedProduct = $this->products[$shopedProduct];
        } else {
            echo "Products not find";
        }
    }

    public function getShopeedProduct() {
        return $this->shopedProduct;
    }
}