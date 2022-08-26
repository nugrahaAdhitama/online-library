<?php

// prevent null url
if ( !isset($url[0]) ) $url[0] = $this->controller;

// page not found
$E404 = '../app/views/errors/404.php';
if ( $url[0] == 'page-not-found' ) die( require $E404 );