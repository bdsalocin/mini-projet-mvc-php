<?php

require __DIR__ . '/controllers/UserController.php';
require __DIR__ . '/controllers/ProductController.php';

$action = $_GET['action'] ?? 'product';

$page = '';

switch ($action) {
    case 'user':
        $controller = new UserController();
        $user = $controller->getUser();
        $page = "views/UserView.php";
        break;
    
    case 'product':
        $controller = new ProductController();
        $products =  $controller->getProduct();
        $page = "views/ProductListView.php";
        break;

        default:
        header("HTTP/1.0 404 Not Found");
        $page = "views/404.php";
        break;
}

    if (!empty($page) && file_exists($page)) {
          require_once $page;
        } else {
          echo "La page est introuvable";
        }

?>