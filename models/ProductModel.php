<?php

class ProductModel {

    public string $title;
    public int $price;

    public function __construct($title, $price) {
        $this->title = $title;
        $this->price = $price;
    }
}