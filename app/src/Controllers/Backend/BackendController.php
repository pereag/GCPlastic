<?php

namespace Src\Controllers\Backend;


class BackendController {

    function __construct() {
        $this->path = "http://localhost/GCPlastic/app"; 
    }
    public function articlesManagement() 
    {
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
    public function updateArticle()
    {
        $titleAnimationScript = true;
        require_once "./src/Views/backend/updateArticle.php";
        $path = $this->path;

    }
}