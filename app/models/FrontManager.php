<?php 
namespace Projet\models;

class FrontManager extends Manager{
    public function viewFront(){
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('Methode sql');
        $req->execute(array());
        return $req;
    }
}