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

    public function addUser() {
        $name = $_POST['name'] ?? '';
        $age = $_POST['age'] ?? 0;
        $this->userDao->addUser($name, $age);
        header("Location: index.php?action=users");
        exit;
    }

    public function deleteUser() {
        $id = $_POST['deleteuser'] ?? null;
        if ($id) {
        $this->userDao->deleteUser($id);
        }
        header("Location: index.php?action=users");
        exit;
    }

    public function updateUser() {
        $id = (int) ($_POST['updateuser'] ?? 0);
        $name = $_POST['name'] ?? '';
        $age = $_POST['age'] ?? 0;
        $this->userDao->updateUser($id, $name, $age);
        header("Location: index.php?action=users");
        exit;
    }

}
