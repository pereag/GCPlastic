<?php

namespace Src\Controllers\Frontend;
use Src\Models\MembersManager;
use Src\Models\PostsManager;
use \Exception;


class FrontendController {

    function __construct() {
        $this->path = "http://localhost/GCPlastic/app"; 
    }
    public function home() 
    {
        $postsManager = new PostsManager();
        $postsManager->getPost(1);
        $slideshowScript = true;
        require_once "./src/Views/frontend/home.php";
        $path = $this->path;
    }
    public function services()
    {
        $titleAnimationScript = true;
        $servicesScript = true;
        require_once "./src/Views/frontend/services.php";
        $path = $this->path;

    }
    public function park()
    {
        $titleAnimationScript = true;
        $parkScript = true;
        require_once "./src/Views/frontend/park.php";
        $path = $this->path;

    }
    public function news()
    {
        $postsManager = new PostsManager();
        $postsManager->getPosts();
        $titleAnimationScript = true;
        $pagingScript = true;
        require_once "./src/Views/frontend/news.php";
        $path = $this->path;

    }
    public function new($id)
    {
        $titleAnimationScript = true;
        $postsManager = new postsManager();
        $postsManager->getPost($id);
        require_once "./src/Views/frontend/new.php";
        $path = $this->path;

    }
    public function contact()
    {
        $titleAnimationScript = true;
        require_once "./src/Views/frontend/contact.php";
        $path = $this->path;

    }
    public function admin()
    {
        $titleAnimationScript = true;
        require_once "./src/Views/frontend/adminForm.php";
        $path = $this->path;

    }
    public function verifyLogin($pseudo, $password)
	{
		$membersManager = new MembersManager();
		return $membersManager->getlogin($pseudo, $password);
	}
}