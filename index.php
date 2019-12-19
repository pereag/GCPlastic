<?php
require_once "vendor/autoload.php";

use \Src\Controllers\Frontend\FrontendController;
use \Src\Controllers\Backend\BackendController;

session_start();

try {
    if(!empty($_GET['action'])) {
    //-------------------- Front office -------------------- 
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
                echo $frontendController->new(htmlspecialchars($_GET['id']));
            }
            else {
                throw new Exception('Article invalide ou inexistant');
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
                throw new Exception('Champs invalides');
            }
        } elseif($_GET['action'] == 'admin') {
            $frontendController = new FrontendController();
            echo $frontendController->admin();
        } elseif($_GET['action'] == 'legalNotice') {
            $frontendController = new FrontendController();
            echo $frontendController->legalNotice();
        } elseif($_GET['action'] == 'verifyLogin') {
            if (!empty($_POST['pseudo']) && !empty($_POST['password'])) {
            $frontendController = new FrontendController();
                if ($frontendController->verifyLogin(htmlspecialchars($_POST['pseudo']), htmlspecialchars($_POST['password']))) {
                    header('location: index.php?action=articlesManagement');
                } else {
                    throw new Exception('Identifiant ou mot de passe invalide');
                }
            } else {
                throw new Exception('Veuiller remplire le formulaire');
            }
    //--------------------- Back office ----------------------
        } elseif ($_SESSION) {
            if($_GET['action'] == 'articlesManagement') {
                $backendController = new Backendcontroller();
                echo $backendController->articlesManagement();
            } elseif($_GET['action'] == 'newArticle') {
                $backendController = new BackendController();
                $backendController->newArticle();
            } elseif($_GET['action'] == 'addPost') {
                if (!empty($_POST['title']) && !empty($_POST['content']) && $_FILES['imagePost']['error'] == 0) {
                    $backendController = new BackendController();
                    $backendController->addPost(htmlspecialchars($_POST['title']), htmlspecialchars($_POST['content']), $_FILES['imagePost']);
                    header('location: index.php?action=articlesManagement');
                } else {
                    throw new Exception('Les champs ne sont pas remplies');
                }
            } elseif($_GET['action'] == 'updateArticle') {
                if(isset($_GET['id']) && $_GET['id'] > 0 ) {
                    $backendController = new BackendController();
                    $backendController->updateArticle(htmlspecialchars($_GET['id']));
                }
                else {
                    throw new Exception('Article invalide ou inexistant');
                }
            } elseif ($_GET['action'] == 'deletePostAdmin') {
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    $backendController = new backendController();
                    $backendController->deletePostAdmin(htmlspecialchars($_GET['id']));
                    header('location: index.php?action=articlesManagement');
                } else {
                    throw new Exception('L\'id n\'est pas valide');
                } 
            } elseif ($_GET['action'] == 'sendModifPost') {
				if (isset($_GET['id']) && $_GET['id'] > 0) {
					if (!empty($_POST['title']) && !empty($_POST['content'])) {
                            $backendController = new BackendController();
						    $backendController->sendModifPost(htmlspecialchars($_POST['title']), htmlspecialchars($_POST['content']), $_FILES['imagePost'],  htmlspecialchars($_GET['id']));
                            header('location: index.php?action=articlesManagement');
					} else {
						throw new Exception('Les champs n\'ons pas étais remplis');
					}
				} else {
					throw new Exception('L\'id du billet est invalide');
				}
			} elseif ($_GET['action'] == 'errorSizeImageUpdate') {

                throw new Exception("L'image est trop grande");

            } elseif ($_GET['action'] == 'errorSendFile') {

                throw new Exception("Envois de l'image a échoué");

            } elseif ($_GET['action'] == 'errorFileImageUpdate') {

                throw new Exception("Le document envoyé n'est pas une image");

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
    $frontendController = new FrontendController();
    echo $frontendController->displayError($e);
}
?>