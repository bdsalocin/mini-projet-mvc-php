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
        $controller = new UserController($userDao);
        $controller->displayOneUser();
        break;  
    
    case 'products':
      $controller = new ProductController($productDao);
      $controller->displayAllProducts();
      break;

    case 'deleteproduct':
      $controller = new ProductController($productDao);
      $controller->deleteProduct();
      break;

    case 'addproduct':
      $controller = new ProductController($productDao);
      $controller->addProduct();
      break;

    case 'productview' :
        $controller = new ProductController($productDao);
        $controller->displayOneProduct();
        break; 

    default:
        http_response_code(404);
        exit;
}



// Supprimer un user / produit -> action, id, methode dans DAO
// ajout avec formulaire pour le produit

?>