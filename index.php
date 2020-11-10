<?php 
session_start();
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
if(!$_SESSION['connect'])
    {
        echo "<li><a href='/session/controller/controllerConnect.php'>connexion</a></li>";
    }
if($_SESSION['connect']===true)
    {
        echo "<li><a href='/session/controller/controllerDeConnect.php'>page deco></a></li>";
    }
if($_SESSION['connect']=== true)
    {
        echo "<li> <a href='/session/controller/controllerConnect.php'>page membre</li>";
    }
?>
<li>
    <a href="/session/index.php">acceuil</a>
</li>
</nav>
<?php
if($_GET["erreur"])
{
    $erreur = $_GET['erreur'];
    echo "<H1>$erreur<H1>";
}
?>
<h1>clique sur sur connexion pour te log IN </h1>
</body>
</html>