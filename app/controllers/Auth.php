<?php

class Auth extends Controller {
    public function index()
    {
        return $this->register();
    }

    public function register()
    {
        $data['title'] = "Register";
        $this->view('auth/register', true, $data);
    }

    public function tambah()
    {
        if( $this->model('Auth_model')->register($_POST) > 0) {
            echo "Sukses";
        } else {
            echo "Gagal";
        }
    }
}