<?php

namespace Src\Controllers\Frontend;


class FrontendController {
    public function accueil() 
    {
        require_once "src/Views/frontend/accueil.php";
    }
    public function services()
    {
        return 'page services';
    }
    public function parcMachines()
    {
        return 'page parc machines';
    }
    public function articles()
    {
        return 'page articles';
    }
    public function article($id)
    {
        return 'page article '.$id;
    }
    public function contact()
    {
        return 'page contact';
    }
}