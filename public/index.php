<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Controllers\CoreController;
use App\Controllers\MainController;
use App\Controllers\ErrorController;

$router = new AltoRouter();
$router->setBasePath($_SERVER['BASE_URI']);

// Page home
$router->map(
    'GET',
    '/',
    'MainController::home',
    'main-home'
);

//page Profil
$router->map(
    'GET',
    '/profil',
    'MainController::profil',
    'main-profil',
);

// Page CV
$router->map(
    'GET',
    '/CV',
    'MainController::CV',
    'main-CV',
);


$match = $router->match();

$dispatcher = new Dispatcher($match, 'ErrorController::err404');

$dispatcher->setControllersArguments($match, $router);
$dispatcher->setControllersNamespace('\App\Controllers');

// var_dump('index.php');
$dispatcher->dispatch();