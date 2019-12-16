<?php

namespace Src\Controllers\Frontend;
use Src\Models\MembersManager;
use Src\Models\PostsManager;
use Src\Models\Mail;
use \Exception;


class FrontendController {

    function __construct() {
        $this->path = "http://localhost/GCPlastic/app"; 
    }
    public function home() 
    {
        $postsManager = new PostsManager();
        $post = $postsManager->getLastPost();
        $slideshowScript = true;
        require_once "./app/src/Views/frontend/home.php";
        $path = $this->path;
    }
    public function services()
    {
        $titleAnimationScript = true;
        $servicesScript = true;
        require_once "./app/src/Views/frontend/services.php";
        $path = $this->path;

    }
    public function park()
    {
        $titleAnimationScript = true;
        $parkScript = true;
        require_once "./app/src/Views/frontend/park.php";
        $path = $this->path;

    }
    public function news()
    {
        $postsManager = new PostsManager();
        $post = $postsManager->getPosts();
        $titleAnimationScript = true;
        $pagingScript = true;
        require_once "./app/src/Views/frontend/news.php";
        $path = $this->path;

    }
    public function new($id)
    {
        $titleAnimationScript = true;
        $postsManager = new postsManager();
        $post = $postsManager->getPost($id);
        require_once "./app/src/Views/frontend/new.php";
        $path = $this->path;

    }
    public function contact()
    {
        $titleAnimationScript = true;
        $contactScript = true;
        require_once "./app/src/Views/frontend/contact.php";
        $path = $this->path;

    }
    public function admin()
    {
        $titleAnimationScript = true;
        require_once "./app/src/Views/frontend/adminForm.php";
        $path = $this->path;

    }
    public function verifyLogin($pseudo, $password)
	{
		$membersManager = new MembersManager();
		return $membersManager->getlogin($pseudo, $password);
    }
    public function sendEmail($lastName, $firstName, $email, $society, $message)
    {
        $mail = new Mail();
        $mail->sendEmail($lastName, $firstName, $email, $society, $message);
    }
    public function legalNotice()
    {
        $titleAnimationScript = true;
        require_once "./app/src/Views/frontend/legalNotice.php";
    }
    public function displayError($error) {
        require_once "./app/src/Views/frontend/error.php";
    }
}