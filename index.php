<?php

define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));

require_once(ROOT.'core/Model.php');
require_once(ROOT.'core/Controller.php');

$params = explode('/',$_GET['p']);

if($params[0] != "") {

    $controller_params = ucfirst($params[0]);

    $controller = $controller_params.'Controller';
    
    $action = isset($params[1]) ? $params[1] : 'index';

    require_once(ROOT.'controllers/'.$controller.'.php');

    $controller = new $controller();

    if(method_exists($controller, $action)) {

        unset($params[0]);

        unset($params[1]);

        call_user_func_array([$controller, $action], $params);

        $controller->$action();

    } else {
        
        header('Location: error');
    }

} else {

    header('Location: home');
    
}