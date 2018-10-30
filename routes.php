<?php
require_once(__DIR__.'/init.php');
require_once(__DIR__.'/controllers/Index.php');
require_once(__DIR__.'/controllers/Error.php');
use PHPRouter\RouteCollection;
use PHPRouter\Router;
use PHPRouter\Route;

$collection = new RouteCollection();
$collection->attachRoute(new Route('/', array(
    '_controller' => 'IndexController::indexAction',
    'methods' => 'GET'
)));
$collection->attachRoute(new Route('/error', array(
    '_controller' => 'ErrorController::errorAction',
    'methods' => 'GET'
)));
$router = new Router($collection);
$route = $router->matchCurrentRequest();