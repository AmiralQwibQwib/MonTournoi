<?php
//important pour la sécurité de vos scripts : les sessions 
//démarre une session 
session_start();

//autoload.php genere avec composer
require_once __DIR__. '/vendor/autoload.php';

try{
    $controllerFront = new \Projet\controllers\ControllerFront(); //objet controler

    if (isset($_GET['action'])) {
        if($_GET['action'] == 'contact'){
            $controllerFront -> contactFront();
        }
        if($_GET['action'] == 'tournament'){
            $controllerFront -> tournamentFront();
        }
        if($_GET['action'] == 'galerie'){
            $controllerFront -> galerieFront();
        }
        if($_GET['action'] == 'about'){
            $controllerFront -> aboutFront();
        }
    } else{
        $controllerFront -> home();
    }
} catch(exception $e){

}