<?php

require_once __DIR__ . '/../models/dao/ProductDAO.php';
require_once __DIR__ . '/../models/ProductModel.php'; 

class ProductController {

    public $productDao;

    public function __construct($productDao) {
        $this->productDao = $productDao;
    }

    public function displayAllProducts() {
        $products = $this->productDao->getAllProducts();
        require_once __DIR__ . '/../views/ProductsView.php';
    }
}