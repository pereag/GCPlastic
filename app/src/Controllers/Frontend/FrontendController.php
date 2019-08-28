<?php

namespace Src\Controllers\Frontend;


class FrontendController {

    function __construct() {
        $this->path = "http://localhost:8001"; 
    }
    public function home() 
    {
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
        $titleAnimationScript = true;
        $pagingScript = true;
        require_once "./src/Views/frontend/news.php";
        $path = $this->path;

    }
    public function new($id)
    {
        $titleAnimationScript = true;
        require_once "./src/Views/frontend/newphp";
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
}