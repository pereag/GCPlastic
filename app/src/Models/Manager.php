<?php

namespace SRC\Models;

use\PDO;

class Manager 
{
    protected $db;

    public function __construct()
    {
        $this->db = $this->dbConnect();
    }

    protected function dbConnect()
    {
        $db = new PDO('mysql:host=localhost;dbname=gcplastic;charset=utf-8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        return $db;
    }
}