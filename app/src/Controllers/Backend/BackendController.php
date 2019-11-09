<?php

namespace Src\Controllers\Backend;
use Src\Models\PostsManager;


class BackendController {

    function __construct() {
        $this->path = "http://localhost/GCPlastic/app"; 
    }
    public function articlesManagement() 
    {
        $postsManager = new PostsManager();
        $post = $postsManager->getPosts();
        $titleAnimationScript = true;
        $datatableScript = true;
        require_once "./src/Views/backend/articlesManagement.php";
        $path = $this->path;
    }
    public function newArticle()
    {
        $titleAnimationScript = true;
        require_once "./src/Views/backend/newArticle.php";
        $path = $this->path;

    }
    public function updateArticle($id)
    {
        $postsManager = new PostsManager();
        $post = $postsManager->getPost($id);
        $titleAnimationScript = true;
        require_once "./src/Views/backend/updateArticle.php";
        $path = $this->path;
    }
    public function sendModifPost($id, $title, $content) 
    {
            $postsManager = new postsManager();
            $removePost = $postsManager->sendModifPost($id, $title, $content);
            $path = $this->path;
    }
    public function deletePostAdmin($id)
	{
		$postsManager = new postsManager();
		$removePost = $postsManager->deletePostAdmin($id);
    }
    public function addPost($title, $content)
	{
	    $postsManager = new postsManager();
		$newPost = $postsManager->createPostAdmin($title, $content);
	}
    public function sessionDestroy()
	{
		session_destroy();
	}
}