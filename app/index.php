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

    $app->get('/actualites', function($request, $response) {
        $frontendController = new FrontendController();
        echo $frontendController->actualites();
    });

    $app->get('/actualites/{id}', function($request, $response, $args) {
        $frontendController = new FrontendController();
        if(!is_numeric($args['id']) || $args['id'] <= 0)
        {
            echo $frontendController->accueil();
        } else {
            echo $frontendController->actualite($args['id']);
        } 
    });

    $app->get('/contact', function($request, $response) {
        $frontendController = new FrontendController();
        echo $frontendController->contact();
    });

    $app->get('/admin', function($request, $response) {
        $frontendController = new FrontendController();
        echo $frontendController->admin();
    });

$app->run();