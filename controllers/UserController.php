<?php
require_once __DIR__ . '/../models/dao/UserDAO.php';
require_once __DIR__ . '/../models/UserModel.php';

class UserController {

    public $userDAO;

    public function __construct($userDAO) {
        $this->userDAO = $userDAO;
    }

    public function displayAllUsers() {
        $users = $this->userDAO->getAllUsers();
        require_once __DIR__ . '/../views/UsersView.php';
    }
}
