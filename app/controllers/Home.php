<?php

class Home extends Controller {
    public function index()
    {
        $data['title'] = "Online Library";
        $this->model('Auth_model')->login($_POST);
        $this->view('home/index',true, $data);
    }
}