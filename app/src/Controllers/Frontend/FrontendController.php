<?php

namespace Src\Controllers\Frontend;


class FrontendController {

    function __construct() {
        $this->imagesPath = "http://localhost:8001/public/images"; 
    }
    public function accueil() 
    {
        require_once "./src/Views/frontend/accueil.php";
        $imagesPath = $this->imagesPath;
    }
    public function services()
    {
        require_once "./src/Views/frontend/services.php";
        $imagesPath = $this->imagesPath;

    }
    public function parcMachines()
    {
        require_once "./src/Views/frontend/parcMachines.php";
        $imagesPath = $this->imagesPath;

    }
    public function actualites()
    {
        require_once "./src/Views/frontend/actualites.php";
        $imagesPath = $this->imagesPath;

    }
    public function actualite($id)
    {
        return 'page article '.$id;
        $imagesPath = $this->imagesPath;

    }
    public function contact()
    {
        require_once "./src/Views/frontend/contact.php";
        $imagesPath = $this->imagesPath;

    }
}