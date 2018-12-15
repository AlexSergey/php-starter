<?php
require_once(__DIR__.'/init.php');
require_once(__DIR__.'/controllers/Index.php');
require_once(__DIR__.'/controllers/Error.php');

$router = new \Bramus\Router\Router();

$router->get('/', 'IndexController::indexAction');
$router->get('/error', 'ErrorController::errorAction');

$router->run();