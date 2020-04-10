<?php
//important pour la sécurité de vos scripts : les sessions 
//démarre une session 
session_start();

//autoload.php genere avec composer
require_once __DIR__. '/vendor/autoload.php';

try{
    $controllerAdmin = new \Projet\controllers\ControllerAdmin(); //objet controller

    //======================= connexion admin ==========================================

    if ($_GET['action'] == 'loginAdmin') { //connexion admin
        $pseudo = htmlspecialchars($_POST['name']);
        $mdp = $_POST['pass'];
        if (!empty($pseudo) && !empty($mdp)) {
            $controllerAdmin->loginAdmin($pseudo, $mdp);
        } else {
            throw new Exception('renseigner vos identifiants');
            }
        }

    elseif ($_GET['action'] == 'creatAdmin'){
        $firstname = $_POST['loginAdmin'];
        $mdp = $_POST['pswAdmin'];
        $pass =  password_hash($mdp, PASSWORD_DEFAULT);
        $controleurAdmin->creatAdmin($loginAdmin, $pswAdmin);

    }
} catch(exception $e){

}