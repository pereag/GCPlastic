<?php
require_once "../vendor/autoload.php";

use \Src\Controllers\Frontend\FrontendController;

$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];

$c = new \Slim\Container($configuration);
$app = new \Slim\App($c);

$app->get('/', function($request, $response) {
    $frontendController = new FrontendController();
    echo $frontendController->accueil();
});

$app->get('/services', function($request, $response) {
    $frontendController = new FrontendController();
    echo $frontendController->services();
});

$app->get('/parc-machines', function($request, $response) {
    $frontendController = new FrontendController();
    echo $frontendController->parcMachines();
});

$app->get('/articles', function($request, $response) {
    $frontendController = new FrontendController();
    echo $frontendController->articles();
});

$app->get('/articles/{id}', function($request, $response, $args) {
    $frontendController = new FrontendController();
    echo $frontendController->article($args['id']);
});

$app->get('/contact', function($request, $response) {
    $frontendController = new FrontendController();
    echo $frontendController->contact();
});

$app->run();