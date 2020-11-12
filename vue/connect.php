<?php session_start();
if(isset($_SESSION["connect"]))
{
    header ('location: ../index.php?erreur=deja connecté');
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire de connexion</title>
</head>
<body>
    <nav>
<li><a href="/session/index.php">accueil</a></li>

</nav>
<h1>connecte toi...</h1>

<form action="../controller/controllerCheckConnect.php" method="post">
        <input type="text" name="login">
        <input type="password" name="mdp">
        <input type="submit" value="go!!">
</form>

</body>
</html>
