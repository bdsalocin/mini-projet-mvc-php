<?php
require_once __DIR__ . '/../models/dao/UserDAO.php';
require_once __DIR__ . '/../models/UserModel.php';

class UserController {

    public $userDao;

    public function __construct($userDao) {
        $this->userDao = $userDao;
    }

    public function displayAllUsers() {
        $users = $this->userDao->getAllUsers();
        require_once __DIR__ . '/../views/UsersView.php';
    }

     public function displayOneUser() {
            $id = $_GET['id'] ?? null;
            if ($id) {
            $userData = $this->userDao->getUserById($id);
            require "views/UserView.php";
        }
    }
}
