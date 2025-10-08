<?php
require_once __DIR__ . '/../UserModel.php';

class UserDAO {

    private PDO $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function getAllUsers() {

        $query = "SELECT * FROM `Users`"; // :id;  -> requete préparée https://www.php.net/manual/fr/pdo.prepared-statements.php
        $stmt = $this->pdo->prepare($query); // Tu prépares
        $stmt->execute(); // Tu exécutes
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC); // Récupère tout en tant qu'objet
        
        $users = [];

        foreach ($data as $user) {
            $user = new UserModel($user["id"], $user["name"], $user["age"]);
            $users[] = $user;
        }
        return $users;  
    }

     public function getUserById($id) {
        $query = "SELECT * FROM `Users` WHERE id = :id"; // :id;  -> requete préparée https://www.php.net/manual/fr/pdo.prepared-statements.php
        $stmt = $this->pdo->prepare($query); // Tu prépares
        $stmt->execute(['id' => $id]); // Tu exécutes
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

     public function deleteUser(int $id) {
        $query = "DELETE FROM `Users` WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute(['id' => $id]);
    }

    public function addUser($name, $age) {
        $query = "INSERT INTO `Users` (name, age) VALUES (:name, :age)";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute(['name' => $name, 'age' => $age]);
    } 

    public function updateUser($id, $name, $age) {
        $query = "UPDATE `Users` SET name = :name, age = :age WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute(['id' => $id, 'name' => $name, 'age' => $age]);
    } 
}




    // public function getUser($id) {
    // try {
    //     $query = "SELECT * FROM Users WHERE id = :id"; // :id;  -> requete préparée https://www.php.net/manual/fr/pdo.prepared-statements.php
    //     $stmt = $pdo->prepare($query); // Tu prépares
    //     $stmt->execute(['id' => $id]); // Tu exécutes
    //     $data = $stmt->fetch(PDO::FETCH_OBJ); // Récupère tout en tant qu'objet
    // } catch(PDOException $e) {
    //     echo "Erreur : " . $e->getMessage();
    // }
    
    // var_dump($data);
    // }