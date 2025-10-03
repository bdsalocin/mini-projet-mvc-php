<?php
require_once './models/User.php';

class UserController {

    public function getUser() {
        $user = new User("Lol");
        require __DIR__ . "/../views/UserView.php";
    }
}