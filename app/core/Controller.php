<?php

class Controller{
    public function view($view, $template = false, $data = []) {
        $view_path = '../app/views/' . $view . '.php';

        if ( !isset($data['title']) ) $data['title'] = APP_NAME;

        if ( !file_exists($view_path) ) die('View file not found!');

        if ( $template ) require HEADER_PATH;
        require $view_path;
        if ( $template ) require FOOTER_PATH;
    }

    public function model($model) {
        $model_path = '../app/models/' . $model . '.php';

        if ( !file_exists($model_path) ) die('Model file not found!');
        require $model_path;

        if ( !class_exists($model) ) die('Model class not found!');
        return new $model;
    }
}