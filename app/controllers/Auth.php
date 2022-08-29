<?php

class Auth extends Controller {
    public function index()
    {
        $data['title'] = "TES";
        $this->view('auth/index', true, $data);
    }

    public function register()
    {
        $data['title'] = "Register";
        $this->view('auth/register', true, $data);
    }
    public function tambah()
    {
        if( $this->model('Auth_model')->register($_POST) > 0) {
            Flash::setFlash('berhasil', 'register', 'success');
            // var_dump($_SESSION['flash']);
            header('Location: ' .BASEURL. '/auth/index');
            // exit;
        } else {
            Flash::setFlash('fail', 'register', 'danger');
            header('Location: ' .BASEURL. '/auth/index');
            // exit;
        }
    }
}