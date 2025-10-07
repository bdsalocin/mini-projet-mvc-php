<?php

require_once __DIR__ . '/controllers/UserController.php';
require_once __DIR__ . '/controllers/ProductController.php';
require_once __DIR__ . '/BaseDeDonnees.php';
require_once __DIR__ . '/models/dao/UserDAO.php';
require_once __DIR__ . '/models/dao/ProductDAO.php';

$action = $_GET['action'] ?? "users";

$pdo = BaseDeDonnees::getConnexion();
$userDao = new UserDAO($pdo);
$users = $userDao->getAllUsers();

$productDao = new ProductDAO($pdo);
$products = $productDao->getAllProducts();

// var_dump($users);

switch ($action) {
    case 'users':
        $user = new UserController($userDao);
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
      $product = new ProductController($productDao);
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
        http_response_code(404);
        exit;
}



// Supprimer un user / produit -> action, id, methode dans DAO
// ajout avec formulaire pour le produit

?>