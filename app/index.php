<?php
require_once "../vendor/autoload.php";

use \Src\Controllers\Frontend\FrontendController;
use \Src\Controllers\Backend\BackendController;

$router = new \Src\Router\Router($_GET['url']); 
$router->get('/', function(){ 
    $frontendController = new FrontendController();
    echo $frontendController->home();
}); 
$router->get('/home', function(){ 
    $frontendController = new FrontendController();
    echo $frontendController->home();
});
$router->get('/services', function(){ 
    $frontendController = new FrontendController();
    echo $frontendController->services();
});
$router->get('/park', function(){ 
    $frontendController = new FrontendController();
    echo $frontendController->park();
});
$router->get('/news', function(){ 
    $frontendController = new FrontendController();
    echo $frontendController->news();
});
$router->get('/new/:id', function($id){ 
    $frontendController = new FrontendController();
    echo $frontendController->new();
});
$router->get('/contact', function(){ 
    $frontendController = new FrontendController();
    echo $frontendController->contact();
});
$router->get('/admin', function(){ 
    $frontendController = new FrontendController();
    echo $frontendController->admin();
});
// ------------------ Backend ---------------------
$router->get('/articlesManagement', function(){ 
    $backendController = new Backendcontroller();
    echo $backendController->articlesManagement();
});
$router->get('/newArticle', function(){ 
    $backendController = new BackendController();
    $backendController->newArticle();
});
$router->get('/updateArticle/:id', function($id){ 
    $backendController = new BackendController();
    $backendController->updateArticle();
});
$router->run(); 

/*
try {
    if(!empty($_GET['action'])) {
        if($_GET['action'] == 'home') {
            $frontendController = new FrontendController();
            echo $frontendController->home();
        } elseif($_GET['action'] == 'services') {
            $frontendController = new FrontendController();
            echo $frontendController->services();
        } elseif($_GET['action'] == 'park') {
            $frontendController = new FrontendController();
            echo $frontendController->park();
        } elseif($_GET['action'] == 'news') {
            $frontendController = new FrontendController();
            echo $frontendController->news();
        } elseif($_GET['action'] == 'new') {
            if(isset($_GET['id']) && $_GET['id'] > 0 ) {
                $frontendController = new FrontendController();
                echo $frontendController->new();
            }
            else {
                throw new Exception('Article invalide ou inexistant.');
            }
        } elseif($_GET['action'] == 'contact') {
            $frontendController = new FrontendController();
            echo $frontendController->contact();
        } elseif($_GET['action'] == 'admin') {
            $frontendController = new FrontendController();
            echo $frontendController->admin();
        }

          elseif($_GET['action'] == 'articlesManagement') {
            $backendController == new Backendcontroller();
            echo $backendController->articlesManagement();
        } elseif($_GET['action'] == 'newArticle') {
            $backendController == new BackendController();
            $backendController->newArticle();
        } elseif($_GET['action'] == 'updateArticle') {
            $backendController == new BackendController();
            $backendController->updateArticle();
        }
        else {
            $frontendController = new FrontendController();
            $frontendController->home();
        }
    }
    else {
        $frontendController = new FrontendController();
        echo $frontendController->home();
    } 
}
catch(Exception $e) {
    echo 'Erreur: ' .$e->getMessage();
}
*/
?>