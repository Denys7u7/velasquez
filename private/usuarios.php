<?php

    session_start();
    if (isset($_SESSION['usuario'])) 
    {
        require 'frontend/usuario-view.php';
    }
    else 
    {
        header('location: login.php');
    }
?>