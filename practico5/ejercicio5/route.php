<?php
require_once('./Controller/formularioController.php');

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

$formularioController = new formularioController();



$params = explode('/', $action);

var_dump($params);

// determina que camino seguir según la acción
switch ($params[0]) {
    case 'home':
        $formularioController->showHome();
        break;
    case 'register':
        $formularioController->register();
        break;
    default: 
    echo('404 Page not found'); 
    break;
}


?>