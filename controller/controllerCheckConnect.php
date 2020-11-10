<?php
//oublier pas de require_once les elements que vous aurez besoin
if
(empty($_POST["login"]) AND empty($_POST["mdp"]))
{
    header('location: /session/index.php?erreur=une erreur est survenue');
}
else
{   
    $login ="logan";//pour tester
    $mdp ="azerty";//pour tester 

    if
    ($login === $_POST["login"] AND $mdp === $_POST["mdp"]) //pour tester
    {
        //appelle ManagerUser pour creer un objet user (correspondant à l'ulisateur)
        //appelle session_start est injecter l'objet fraichement nstancier dedans 
        session_start();
        $_SESSION["connect"] = true;//passer une variable $connect à true (boolean)
        $_SESSION["member"] = $_POST["login"];
        //header page membre 
        header ('location: /session/controller/controllerMember.php');
    }
    else
    {
        //pas bon 
        header('location: /session/index.php?erreur=une erreur est survenue');
    }
}

?>