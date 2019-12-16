<?php

namespace Src\Controllers\Backend;
use Src\Models\PostsManager;
use Src\Models\ImageUpload;


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
        require_once "./app/src/Views/backend/articlesManagement.php";
        $path = $this->path;
    }
    public function newArticle()
    {
        $titleAnimationScript = true;
        require_once "./app/src/Views/backend/newArticle.php";
        $path = $this->path;

    }
    public function updateArticle($id)
    {
        $postsManager = new PostsManager();
        $post = $postsManager->getPost($id);
        $titleAnimationScript = true;
        require_once "./app/src/Views/backend/updateArticle.php";
        $path = $this->path;
    }
    public function sendModifPost($title, $content, $imagePost, $id)
    {
        $postsManager = new PostsManager();
        $oldImagePost = $postsManager->getPost($id)->getImagePost();
        $imageUpload = new ImageUpload();
        
        if ($imagePost['error'] == 0 ){
            $imageUpload->removeImage($oldImagePost);
            $imagePost = $imageUpload->checkImage($imagePost);
        } else {
            $imagePost = $oldImagePost;
        }

        $postsManager->sendModifPost($title, $content, $imagePost, $id);
        $path = $this->path;
    }
    public function deletePostAdmin($id)
	{
        $postsManager = new PostsManager();
        $imagePost = $postsManager->getPost($id)->getImagePost();
        $imageUpload = new ImageUpload();
        $imageUpload->removeImage($imagePost);
		$postsManager->deletePostAdmin($id);
    }
    public function addPost($title, $content, $imagePost)
	{
        $imageUpload = new ImageUpload();
        $imagePost = $imageUpload->checkImage($imagePost);
        $postsManager = new PostsManager();
		$newPost = $postsManager->createPostAdmin($title, $content, $imagePost);
	}
    public function sessionDestroy()
	{
		session_destroy();
	}
}