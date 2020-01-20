<?php

	error_reporting(E_ALL);
    ini_set('display_errors', 'on');
    
    spl_autoload_register(function($class) {
        // ваша реализация автозагрузки
        $ds = DIRECTORY_SEPARATOR;
        
        $filename = $_SERVER['DOCUMENT_ROOT'] . $ds . str_replace('\\',$ds,$class) . '.php';
        require $filename;
    });
    
    $routes = require $_SERVER['DOCUMENT_ROOT'] . '/project/config/routes.php';
    var_dump($routes);
?>