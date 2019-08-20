<?php

namespace Src\Controllers\Frontend;


class FrontendController {

    function __construct() {
        $this->path = "http://localhost:8001"; 
    }
    public function home() 
    {
        require_once "./src/Views/frontend/home.php";
        $path = $this->path;
    }
    public function services()
    {
        $servicesScript = true;
        require_once "./src/Views/frontend/services.php";
        $path = $this->path;

    }
    public function park()
    {
        require_once "./src/Views/frontend/park.php";
        $path = $this->path;

    }
    public function news()
    {
        require_once "./src/Views/frontend/news.php";
        $path = $this->path;

    }
    public function new($id)
    {
        require_once "./src/Views/frontend/newphp";
        $path = $this->path;

    }
    public function contact()
    {
        require_once "./src/Views/frontend/contact.php";
        $path = $this->path;

    }
    public function admin()
    {
        require_once "./src/Views/frontend/adminForm.php";
        $path = $this->path;

    }
}