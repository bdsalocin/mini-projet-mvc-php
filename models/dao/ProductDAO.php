<?php

require_once __DIR__ . '/../ProductModel.php';


class ProductDAO {

    private PDO $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function getAllProducts() {

        $query = "SELECT * FROM `Products`"; // :id;  -> requete préparée https://www.php.net/manual/fr/pdo.prepared-statements.php
        $stmt = $this->pdo->prepare($query); // Tu prépares
        $stmt->execute(); // Tu exécutes
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC); // Récupère tout en tant qu'objet
        
        $products = [];

        foreach ($data as $product) {
            $product = new ProductModel($product["id"], $product["price"], $product["name"], $product['description']);
            $products[] = $product;
        }
        return $products;  
    }

    public function getProductById($id) {
        $query = "SELECT * FROM `Products` WHERE id = :id"; // :id;  -> requete préparée https://www.php.net/manual/fr/pdo.prepared-statements.php
        $stmt = $this->pdo->prepare($query); // Tu prépares
        $stmt->execute(['id' => $id]); // Tu exécutes
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function deleteProduct($id) {
        $query = "DELETE FROM `Products` WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute(['id' => $id]);
    }

    public function addProduct($name, $price, $description) {
        $query = "INSERT INTO `Products` (name, price, description) VALUES (:name, :price, :description)";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute(['name' => $name, 'price' => $price, 'description' => $description]);
    } 
}
