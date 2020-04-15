<?php 

namespace Projet\controllers;

class ControllerAdmin{
    //function pour création admin
function creatAdmin($loginAdmin, $pswAdmin)
{
    $userManager = new \Projet\Models\UserManager();
    $mdp = $userManager->creatMdpAdmin($loginAdmin, $pswAdmin);
}
function connect(){
    require 'app/views/back/login.php';
}
function loginAdmin($pseudo, $mdp)
    { //recup du mot de pass
        $userManager = new \Projet\Models\UserManager();
        $loginAdmin = $userManager->recupMdp($pseudo, $mdp);
        $resultat = $loginAdmin->fetch();
        $isPasswordCorrect = password_verify($mdp, $resultat['pswAdmin']);
        $_SESSION['loginAdmin'] = $resultat['loginAdmin']; // transformation des variables recupérées en session
        $_SESSION['pswAdmin'] = $resultat['pswAdmin'];
        $_SESSION['idUsers'] = $resultat['idUsers'];
        if ($isPasswordCorrect) {

            $CrochetManager = new \Projet\Models\CrochetManager();
            $nbrItemCrochet = $CrochetManager->nbrItemC();


            $userManager = new \Projet\Models\UserManager();
            $nbrComment = $userManager->nbrComents();
            $nbrCommentReport = $userManager->nbrReportComment();
            $nbrCommentBook = $userManager->nbrVisitorBook();
            $nbrReportBook = $userManager->nbrReportCommentBook();
            $nbrMail = $userManager->nbrUserMail();

            require 'app/views/back/dashboard.php';
        } else {
            echo 'vos identifiants sont incorrect';
            //require('views/backend/erreur.php');
        }


    }
}