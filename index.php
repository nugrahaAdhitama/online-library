<?php
$config = 'app/config/config.php';
file_exists($config) ? require $config : die('App fatal error! Config file not found.');
header('Location: ' . BASEURL);
?>