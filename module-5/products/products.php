<?php

require_once('members.php');

class Products {
    public $products;

    function __construct($array) {
        $this->products = $array;
    }
    
    function getProducts() {
        return $this->products;
    }

    function removeProuduct($productId) {
        $remvoeProduct = array_search($productId, array_column($this->products, 'id'));

        if ($remvoeProduct !== false) {
            unset($this->products[$remvoeProduct]);
        } else {
            echo "Products not find";
        }
    }

    function updateProuduct($productId) {
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
}

class Shop extends Products {
    private $shopedProduct;
    private $products;

    function __construct($array) {
        $this->shopedProduct = [];
        $this->products = $array;
    }

    function addShoped($shopedId) {
        $shopedProduct = array_search($shopedId, array_column(parent::getProducts(), 'id'));
        
        if ($shopedProduct !== false) {
            $this->shopedProduct = $this->products[$shopedProduct];
            // print_r($this->)
        } else {
            echo "Products not find";
        }
    }

    function getShopeedProduct() {
        return $this->shopedProduct;
    }
}