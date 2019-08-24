<?php

namespace Src\Controllers\Backend;


class BackendController {

    function __construct() {
        $this->path = "http://localhost:8001"; 
    }
    public function articlesManagement() 
    {
        $datatableScript = true;
        require_once "./src/Views/backend/articlesManagement.php";
        $path = $this->path;
    }
    public function newArticle()
    {
        require_once "./src/Views/backend/newArticle.php";
        $path = $this->path;

    }
    public function updateArticle()
    {
        require_once "./src/Views/backend/updateArticle.php";
        $path = $this->path;

    }
}