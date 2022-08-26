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
}