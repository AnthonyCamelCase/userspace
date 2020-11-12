<?php
session_start();
if(!$_SESSION["connect"])
{
    session_destroy();//useless par precaution
    header ('location: ../index.php?erreur= tu ne peux pas de deconnecter si tu n\'est pas connecté logique');
}
else
{
    unset($_SESSION["connect"]);//je vide ou unset les variable de session une à une
    unset($_SESSION["member"]);
    session_destroy();//je destroy la session
    header ('location: ../index.php');
}

?>