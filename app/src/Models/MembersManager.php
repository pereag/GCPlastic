<?php 

namespace Src\Models;

use Src\Models\Manager;
use \PDO;

class MembersManager extends Manager 
{
    public function getLogin($pseudo, $password)
    {
        $req = $this->db->prepare('SELECT pseudo, password FROM members WHERE pseudo = ?');
        $req->execute(array($pseudo));
        $getMember = $req->fetch(\PDO::FETCH_ASSOC);

        if( $pseudo == $getMember['pseudo'] && password_verify($password, $getMember['password'])){
            $_SESSION['auth'] = $pseudo;
            return true;
        } else {
            return false;
        }
    }
} 