<?php
/**
 * Created by PhpStorm.
 * Date: 22/01/19
 * Time: 14:18
 */

class Users {

    private $db;

    public function __construct($database) {
        $this->db = $database;
    }
    
    public function register(){

        $req = "INSERT INTO users (username, birthdate, display_name, email ,password) 
        VALUES (:username, :birthdate, :display_name, :email, :password)";

        $query = $this->db->prepare($req); 
        $query->bindParam(':username', $_POST['username'], PDO::PARAM_STR); 
        $query->bindParam(':birthdate', $_POST['date_birth'], PDO::PARAM_STR);
        $query->bindParam(':display_name', $_POST['display_name'], PDO::PARAM_STR); 
        $query->bindParam(':email', $_POST['email'], PDO::PARAM_STR); 
        $query->bindParam(':password', $_POST['pass'], PDO::PARAM_STR);
        $query->execute(); 
    }
    
    public function login($email, $password) {}

}