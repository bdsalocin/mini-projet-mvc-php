<?php

require_once __DIR__ . '/../models/ProductModel.php'; 

class ProductController {

    public $products = [
        "Pates" => 2,
        "Lessive" => 8,
        "Mangues" => 4,
        "Eau" => 2
    ];

    public function getProduct() {
    $products = [];

        foreach($this->products as $title => $price) {
            $products[] = new ProductModel($title, $price);
        }
        return $products;
    }
}