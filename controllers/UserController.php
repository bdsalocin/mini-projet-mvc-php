<?php
require_once __DIR__ . '/../models/UserModel.php';


class UserController {

    public function getUser() {
        $user = new UserModel("Lol");
        return $user;
    }
}