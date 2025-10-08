<?php

require_once __DIR__ . '/controllers/UserController.php';
require_once __DIR__ . '/controllers/ProductController.php';
require_once __DIR__ . '/BaseDeDonnees.php';
require_once __DIR__ . '/models/dao/UserDAO.php';
require_once __DIR__ . '/models/dao/ProductDAO.php';

$action = $_GET['action'] ?? "users";

$pdo = BaseDeDonnees::getConnexion();

$productDao = new ProductDAO($pdo);
$productController = new ProductController($productDao);
$products = $productDao->getAllProducts();

$userDao = new UserDAO($pdo);
$userController = new UserController($userDao);
$users = $userDao->getAllUsers();



// var_dump($users);

switch ($action) {
    case 'users':
      $userController->displayAllUsers();
      break;

    case 'userview' :
      $userController->displayOneUser();
      break; 
        
    case 'adduser':
      $userController->addUser();
      break;

    case 'deleteuser':
      $userController->deleteUser();
      break;

    case 'updateuser':
      $userController->updateUser();
      break;
    
    case 'products':
      $productController->displayAllProducts();
      break;
      
    case 'productview' :
          $productController->displayOneProduct();
          break; 

    case 'deleteproduct':
      $productController->deleteProduct();
      break;

    case 'addproduct':
      $productController->addProduct();
      break;

    case 'updateproduct':
    $productController->updateProduct();
    break;

    default:
        http_response_code(404);
        exit;
}



// Supprimer un user / produit -> action, id, methode dans DAO
// ajout avec formulaire pour le produit

?>