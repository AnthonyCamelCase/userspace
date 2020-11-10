<?php session_start();
if($_SESSION["connect"]=== true)
{
    header('location: /session/controller/controllerConnect.php');
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
<?php
if($_SESSION['connect'])
{
    echo "<li><a href='/session/controller/controllerDeConnect.php'>page deco></a></li>";
}
?>
<li>
    <a href="/session/index.php">acceuil</a>
</li>
<?php
if($_SESSION['connect'])
{
    echo "<li> <a href='/session/controller/controllerConnect.php'>page membre</li>";
}
?>
</nav>
<h1>connecte toi...</h1>
<form action="/session/controller/controllerCheckConnect.php" method="post">
        <input type="text" name="login">
        <input type="password" name="mdp">
                    <input type="submit" value="go!!">
</form>

</body>
</html>
