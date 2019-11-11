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
    public function sendModifPost($title, $content, $imagePost, $id) 
    {
            $postsManager = new postsManager();
            $removePost = $postsManager->sendModifPost($title, $content, $imagePost, $id);
            $path = $this->path;
    }
    public function deletePostAdmin($id)
	{
		$postsManager = new postsManager();
		$removePost = $postsManager->deletePostAdmin($id);
    }
    public function addPost($title, $content, $imagePost)
	{
	    $postsManager = new postsManager();
		$newPost = $postsManager->createPostAdmin($title, $content, $imagePost);
	}
    public function sessionDestroy()
	{
		session_destroy();
	}
}