<?php
session_start();
if($_SESSION["connect"])
{
    header ('location: /session/index.php?erreur=deja connecté');
}
else
{
    header ('location: /session/vue/connect.php');
}

?>