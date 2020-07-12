<?php

    session_start();
    if (isset($_SESSION['usuario'])) 
    {
        require 'frontend/agregarU-view.php';
    }
    else 
    {
        header('location: login.php');
    }
?>