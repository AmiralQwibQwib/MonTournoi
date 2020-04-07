<?php
//important pour la sécurité de vos scripts : les sessions 
//démarre une session 
session_start();

//autoload.php genere avec composer
require_once __DIR__. '/vendor/autoload.php';

try{
    $controllerAdmin = new \Projet\controllers\ControllerAdmin(); //objet controler

    if (isset($_POST['idamin']) AND $_POST['idadmin'] ==  "admin"){
        $controllerAdmin -> home();
}
    
    else{
        $controllerAdmin -> login();
    }
} catch(exception $e){

}