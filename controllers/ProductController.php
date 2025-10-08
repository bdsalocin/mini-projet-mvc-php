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

    public function displayOneProduct() {
            $id = $_GET['id'] ?? null;
            if ($id) {
            $productData = $this->productDao->getProductById($id);
            require "views/ProductView.php";
        }
    }

    public function addProduct() {
        $name = $_POST['name '] ?? '';
        $price = $_POST['price'] ?? 0;
        $description = $_POST['description'] ?? '';
        $this->productDao->addProduct($name, $price, $description);
        header("Location: index.php?action=products");
        exit;
    }

    public function deleteProduct() { // faire avec post
        $id = $_POST['deleteproduct'] ?? null;
        if ($id) {
        $this->productDao->deleteProduct($id);
        } header("Location: index.php?action=products");
        exit;
    }

}