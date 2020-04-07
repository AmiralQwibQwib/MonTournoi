<?php 

namespace Projet\controllers;

class ControllerAdmin{
    function login(){
        // $homeFront = new \Projet\models\FrontManager();
        // $accueil = $homeFront->ViewFront();
 
        require 'app/views/back/login.php';
    }
    function contactBack(){
        require 'app/views/Back/contact.php';
    }
    function aboutBack(){
        require 'app/views/Back/about.php';
    }
    function tournamentBack(){
        require 'app/views/Back/tournament.php';
    }
    function galerieBack(){
        require 'app/views/Back/galerie.php';
    }
}