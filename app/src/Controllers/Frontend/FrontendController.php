<?php

namespace Src\Controllers\Frontend;


class FrontendController {

    function __construct() {
        $this->path = "http://localhost:8001"; 
    }
    public function accueil() 
    {
        require_once "./src/Views/frontend/accueil.php";
        $path = $this->path;
    }
    public function services()
    {
        require_once "./src/Views/frontend/services.php";
        $path = $this->path;

    }
    public function parcMachines()
    {
        require_once "./src/Views/frontend/parcMachines.php";
        $path = $this->path;

    }
    public function actualites()
    {
        require_once "./src/Views/frontend/actualites.php";
        $path = $this->path;

    }
    public function actualite($id)
    {
        require_once "./src/Views/frontend/actualite.php";
        $path = $this->path;

    }
    public function contact()
    {
        require_once "./src/Views/frontend/contact.php";
        $path = $this->path;

    }
}