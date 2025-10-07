<?php

class ProductModel {

    public int $id;
    public int $price;
    public string $name;
    public string $description;

    public function __construct($id, $price, $name, $description) {
        $this->id = $id;
        $this->price = $price;
        $this->name = $name;
        $this->description = $description;
    }
}