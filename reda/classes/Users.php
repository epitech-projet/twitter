<?php

class Users {

    private $db;

    public function __construct($database) {
        $this->db = $database;
    }

    public function register($username, $display_name, $birthdate, $email, $password) {
        $sql = $this->db->prepare("INSERT INTO users (username, display_name, birthdate, email, password) 
                                  VALUE (:username, :display_name, :birthdate, :email, :password)");
        $sql->bindValue(':username', $username);
        $sql->bindValue(':display_name', $display_name);
        $sql->bindValue(':birthdate', $birthdate);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':password', $password);
        $sql->execute();
    }

    public function login($email, $password) {
        $sql = $this->db->prepare("SELECT id_user, avatar, bio, username, display_name, email, theme, status_account, private_account FROM users WHERE email = :email AND password = :password");
        $sql->bindValue(':password', hash('ripemd160',$password . "si tu aimes la wac tape dans tes mains"));
        $sql->bindValue(':email', $email);
        $sql->execute();
        if ($sql->rowCount() != 1) {
            return false;
        } else {
            return $sql->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    public function set_session($user_info) {
        $_SESSION['id_user'] = $user_info[0]['id_user'];
        $_SESSION['bio'] = $user_info[0]['bio'];
        $_SESSION['username'] = $user_info[0]['username'];
        $_SESSION['display_name'] = $user_info[0]['display_name'];
        $_SESSION['email'] = $user_info[0]['email'];
        $_SESSION['theme'] = $user_info[0]['theme'];
        $_SESSION['avatar'] = $user_info[0]['avatar'];
        $_SESSION['status_account'] = $user_info[0]['status_account'];
        $_SESSION['private_account'] = $user_info[0]['private_account'];
    }

    public function username_exists($username) {
        $sql = $this->db->prepare("SELECT username FROM users WHERE username = :username");
        $sql->bindValue(":username", $username);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function email_exists($email) {
        $sql = $this->db->prepare("SELECT email FROM users WHERE email = :email");
        $sql->bindValue(":email", $email);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function phone_exists($phone) {
        $sql = $this->db->prepare("SELECT phone FROM users WHERE phone = :phone");
        $sql->bindValue(":phone", $phone);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

}