<?php

class BaseDeDonnees {

    private static ?PDO $pdo = null;

    public static function getConnexion() {

        if (self::$pdo === null) {
            self::$pdo = new PDO("mysql:host=127.0.0.1;port=8889;dbname=Data_Products", "root", "root"); // DSN, username, password
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Si jamais il y a une erreur, dit moi ce qui ne va pas 
// On peux les mettre dans une classe et fichier séparé pour éviter de les répéter
    }   
        return self::$pdo;
    }
}