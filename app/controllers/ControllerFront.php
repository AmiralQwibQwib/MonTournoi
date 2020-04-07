<?php 

namespace Projet\controllers;

class ControllerFront{
    function home(){
        // $homeFront = new \Projet\models\FrontManager();
        // $accueil = $homeFront->ViewFront();
 
        require 'app/views/front/home.php';
    }
    function contactFront(){
        require 'app/views/front/contact.php';
    }
    function aboutFront(){
        require 'app/views/front/about.php';
    }
    function tournamentFront(){
        require 'app/views/front/tournament.php';
    }
    function galerieFront(){
        require 'app/views/front/galerie.php';
    }
}