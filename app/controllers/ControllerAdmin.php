<?php 

namespace Projet\controllers;

class ControllerAdmin{
    function login(){
        // $homeFront = new \Projet\models\FrontManager();
        // $accueil = $homeFront->ViewFront();
 
        require 'app/views/back/login.php';
    }
    function contactBack(){
        require 'app/views/back/contact.php';
    }
    function aboutBack(){
        require 'app/views/back/about.php';
    }
    function tournamentBack(){
        require 'app/views/back/tournament.php';
    }
    function galerieBack(){
        require 'app/views/back/galerie.php';
    }
    function dashboardBack(){
        require 'app/views/back/dashboard.php';
    }
}