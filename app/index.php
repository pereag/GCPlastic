<?php
require_once "../vendor/autoload.php";

use \Src\Controllers\Frontend\FrontendController;
use \Src\Controllers\Backend\BackendController;

session_start();

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
                echo $frontendController->new($_GET['id']);
            }
            else {
                throw new Exception('Article invalide ou inexistant.');
            }
        } elseif($_GET['action'] == 'contact') {
            $frontendController = new FrontendController();
            echo $frontendController->contact();
        } elseif($_GET['action'] == 'sendEmail') {
            if (!empty($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_POST['email']) && !empty($_POST['message']))
            {
                $frontendController = new FrontendController();
                $frontendController->sendEmail( htmlspecialchars($_POST['lastname']), htmlspecialchars($_POST['firstname']),
                htmlspecialchars($_POST['email']), htmlspecialchars($_POST['society']), htmlspecialchars($_POST['message']));
            } else {
                throw new Exception('Valeurs vides');
            }
        } elseif($_GET['action'] == 'admin') {
            $frontendController = new FrontendController();
            echo $frontendController->admin();
        } elseif($_GET['action'] == 'verifyLogin') {
            if (!empty($_POST['pseudo']) && !empty($_POST['password'])) {
            $frontendController = new FrontendController();
                if ($frontendController->verifyLogin(htmlspecialchars($_POST['pseudo']), htmlspecialchars($_POST['password']))) {
                    header('location: index.php?action=articlesManagement');
                } else {
                    throw new Exception('Identifiant ou mot de pass invalide');
                }
            } else {
                throw new Exception('Veuiller remplire le formulaire');
            }
        } elseif ($_SESSION) {
            if($_GET['action'] == 'articlesManagement') {
                $backendController = new Backendcontroller();
                echo $backendController->articlesManagement();
            } elseif($_GET['action'] == 'newArticle') {
                $backendController = new BackendController();
                $backendController->newArticle();
            } elseif($_GET['action'] == 'updateArticle') {
                $backendController = new BackendController();
                $backendController->updateArticle();
            } elseif ($_GET['action'] == 'sessionDestroy') {
				$backendController = new BackendController();
				$backendController->sessionDestroy();
				header('location: index.php');
			} else {
				throw new Exception('Session expirée ou page introuvable');
			}
        }
        else {
            throw new Exception('Session expirée ou page introuvable');
        }
    } else {
        $frontendController = new FrontendController();
        echo $frontendController->home();
    } 
}
catch(Exception $e) {
    echo 'Erreur: ' .$e->getMessage();
}
?>