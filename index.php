<?php

require_once __DIR__ . '/controllers/UserController.php';
require_once __DIR__ . '/controllers/ProductController.php';
require_once __DIR__ . '/BaseDeDonnees.php';
require_once __DIR__ . '/models/dao/UserDAO.php';
require_once __DIR__ . '/models/dao/ProductDAO.php';

$action = $_GET['action'] ?? 'null';

$page = '';

$pdo = BaseDeDonnees::getConnexion();


$userDao = new UserDAO($pdo);
$users = $userDao->getAllUsers();
$user = new UserController($userDao);
// var_dump($users);

$productDao = new ProductDAO($pdo);
$products = $productDao->getAllProducts();
$product = new ProductController($productDao);

switch ($action) {
    case 'users':
        $user->displayAllUsers();
        break;

    case 'userview' :
        $id = $_GET['id'] ?? null;
        if ($id) {
          $userData = $userDao->getUserById($id);
          require "views/UserView.php";
        }
        break;  
    
    case 'products':
        $product->displayAllProducts();
        break;

    case 'productview' :
        $id = $_GET['id'] ?? null;
        if ($id) {
          $productData = $productDao->getProductById($id);
          require "views/ProductView.php";
        }
        break; 

        default:
        null;
}



?>