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
            Flash::setFlash('success', 'register', 'success');
            header('Location: ' .BASEURL. '/auth/register');
            exit;
        } else {
            Flash::setFlash('fail', 'register', 'danger');
            header('Location: ' .BASEURL. '/auth/register');
            exit;
        }
    }
}