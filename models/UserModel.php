<?php

class UserModel {
    
    public int $id;
    public string $name;
    public int $age;

    public function __construct($id, $name, $age) {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
    }
}  