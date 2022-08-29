<?php

class Auth extends Controller {
    public function index()
    {
        $data['title'] = "TES";
        $this->view('templates/header',true, $data);
        $this->view('auth/index', true, $data);
        $this->view('templates/footer');
    }

    public function register()
    {
        $data['title'] = "Register";
        $this->view('auth/register', true, $data);
    }
    public function tambah()
    {
        if( $this->model('Auth_model')->register($_POST) > 0) {
            // Flash::setFlash('berhasil', 'register', 'success');
            echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Mahasiswa <strong>berhasil </strong>ditambahkan.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ';
            // var_dump($_SESSION['flash']);
            // header('Location: ' .BASEURL. '/auth/index');
            exit;
        } else {
            Flash::setFlash('fail', 'register', 'danger');
            // header('Location: ' .BASEURL. '/auth/register');
            exit;
        }
    }
}