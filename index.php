<?php
use Bramus\Router\Router;

// Require composer autoloader
require __DIR__ . '/vendor/autoload.php';

// Create Router instance
$router = new Router;

$router->get('/hello', function() {
    echo "Hello world";
});

$router->get('/articles/{id}', function ($id) {
    echo "Voici l'article " . $id;
});

$router->run();