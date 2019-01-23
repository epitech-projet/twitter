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

    public function register($user_info) {}

    public function login($email, $password) {}

}