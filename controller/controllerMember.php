<?php
session_start();
if(!$_SESSION["member"])
{
    session_destroy();
    header ('location: /session/index.php?erreur=tu n\'est pas connecté tu ne peux pas acceder ici');
}
else
{
    header ('location: /session/vue/member.php');
}

?>