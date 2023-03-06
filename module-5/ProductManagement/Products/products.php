<?php
namespace ProductManagement\Products;

use \ProductManagement\Products\ProductsInterfaces\ProductsInterfaces;
class Products implements ProductsInterfaces{
    protected $products;

    public function __construct($array = []) {
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

    public function updateProuduct($productId, $productTitle, $productPrice) {
        $updateProduct = array_search($productId, array_column($this->products, 'id'));

        if ($updateProduct !== false) {
            $products[$productId]['name'] = $productTitle;
            $products[$productId]['price'] = $productPrice;
            print_r($products);
            $this->products[$productId] = $products;
        } else {
            echo "Products not update";
        }
    }

    public function addProduct($productId, $productTitle, $productPrice) {
        $this->products[] = ['id' => $productId, 'name' => $productTitle, 'price' => $productPrice];
    }
}