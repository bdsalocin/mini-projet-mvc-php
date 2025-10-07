<?php

class ProductModel {

    public int $id;
    public int $price;
    public string $name;

    public function __construct($id, $price, $name) {
        $this->id = $id;
        $this->price = $price;
        $this->name = $name;
    }
}