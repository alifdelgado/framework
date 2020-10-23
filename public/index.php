<?php
ini_set('display_errors', 'On');
require_once __DIR__ . '/../vendor/autoload.php';

$app = new App\Core\Application(realpath(__DIR__ . '/../app/'));
$app->router->get('/', 'home');
$app->router->get('/contact', 'contact');
$app->run();
