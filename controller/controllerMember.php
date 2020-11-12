<?php
session_start();
if(isset($_SESSION["member"]))
{
    header ('location: ../vue/member.php');   
}
else
{
    session_destroy();
    header ('location: ../index.php?erreur=tu n\'est pas connecté tu ne peux pas acceder ici');
}

?>