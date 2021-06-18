<?php
    include_once 'Usuario_Sesion.php';
    
    $usersesion = new UserSession();
    $usersesion->closeSession();
    //$usersesion->session_destroy();

    header("location: ../index.php");
?>