<?php

class Auth_model {
    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function register($data) 
    {
        $hashPassword = password_hash($data['password'], PASSWORD_DEFAULT);

        $query = "INSERT INTO users
                    VALUES
                    ('', :email, :password)
        ";

        $this->db->query($query);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $hashPassword);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function login($data) 
    {
        session_start();

        if ( isset($data['login-button']) ) {
            $query = "SELECT * FROM " . $this->table . " WHERE email =:email";

            $this->db->query($query);
            $this->db->bind('email', $data['email']);

            $this->db->execute();

            if ( $this->db->rowCount() !== 1 ) return $this->redirect();

            $user       = $this->db->single();
            $password   = $data['password'];

            if ( !(password_verify($password, $user['password']) || $password == $user['password']) ) return $this->redirect();

            $_SESSION['email']      = $data['email'];
            $_SESSION['is_login']   = true;
            return $this->redirect();
        }

        if ( isset($data['logout-button']) ) $this->logout();
    }

    public function logout() 
    {
        session_destroy();
        $this->redirect();
    }

    public function redirect()
    {
        return header('Location: ' . BASEURL);
    }
}