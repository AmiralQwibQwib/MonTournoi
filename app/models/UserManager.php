<?php 
namespace Projet\models;

class UserManager extends Manager{
    public function recupMdp($pseudo, $password){
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('SELECT * FROM admin WHERE pseudo =:pseudo');
        $req->execute(array("pseudo" => $pseudo));
        return $req;
    }
} 

