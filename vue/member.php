<?php session_start();
print_r($_SESSION);
if(!$_SESSION["connect"])
{
    header('location: ../controller/controllerMember.php');
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page du membre</title>
</head>
<body>
<nav>
<li><a href='../controller/controllerDeConnect.php'>page deco</a></li>
<li><a href='../controller/controllerMember.php'>page membre</a></li>
<li><a href="../index.php">accueil</a></li>
</nav>


<h1>page membre <?php echo $_SESSION["member"] ?></h1> <!--indiquez le login du membre-->
</body>
</html>
