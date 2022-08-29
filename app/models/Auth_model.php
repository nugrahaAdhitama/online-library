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
        $role = 1;
        $random = rand(1, 999999);
        $nomor_anggota = $random;

        $query = "INSERT INTO users
                    VALUES
                    ('', :role_id, :nama, :nomor_anggota, :email, :password, :alamat, :telepon)
        ";

        $this->db->query($query);
        $this->db->bind('role_id', $role);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nomor_anggota', $nomor_anggota);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $hashPassword);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('telepon', $data['telepon']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function login($data) 
    {

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