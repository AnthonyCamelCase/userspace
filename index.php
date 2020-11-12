<?php 
session_start();
print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>acceuil du site </title>
</head>
<body>
<nav>
<?php

if(isset($_SESSION['connect']))
    {
        echo "<li><a href='controller/controllerDeConnect.php'>page deco</a></li>";
        echo "<li> <a href='controller/controllerMember.php'>page membre</li>";
    }
else
    {
        echo "<li><a href='vue/connect.php'>connexion</a></li>";
         }
?>
<li>
    <a href="index.php">accueil</a>
</li>
</nav>
<?php
if(isset($_GET["erreur"]))
{
    $erreur = $_GET['erreur'];
    echo "<H1>$erreur<H1>";
}
?>
<h1>clique sur sur connexion pour te login </h1>
</body>
</html>