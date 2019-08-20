<?php
require_once "../vendor/autoload.php";

use \Src\Controllers\Frontend\FrontendController;
use \Src\Controllers\Backend\BackendController;

$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];

$c = new \Slim\Container($configuration);
$app = new \Slim\App($c);

    $app->get('/', function($request, $response) {
        $frontendController = new FrontendController();
        echo $frontendController->home();
    });

    $app->get('/services', function($request, $response) {
        $frontendController = new FrontendController();
        echo $frontendController->services();
    });

    $app->get('/park', function($request, $response) {
        $frontendController = new FrontendController();
        echo $frontendController->park();
    });

    $app->get('/news', function($request, $response) {
        $frontendController = new FrontendController();
        echo $frontendController->news();
    });

    $app->get('/news/{id}', function($request, $response, $args) {
        $frontendController = new FrontendController();
        if(!is_numeric($args['id']) || $args['id'] <= 0)
        {
            echo $frontendController->home();
        } else {
            echo $frontendController->new($args['id']);
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

/*---------------------------BACKEND--------------------------------*/

    $app->get('/articlesManagement', function($request, $response) {
        $backendController = new BackendController();
        echo $backendController->articlesManagement();
    });

    $app->get('/newArticle', function($request, $response) {
        $backendController = new BackendController();
        echo $backendController->newArticle();
    });

    $app->get('/updateArticle', function($request, $response) {
        $backendController = new BackendController();
        echo $backendController->updateArticle();
    });

$app->run();