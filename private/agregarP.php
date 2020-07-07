<?php

    session_start();
    if (isset($_SESSION['usuario'])) 
    {
        require 'frontend/agregarP-view.php';
    }
    else 
    {
        header('location: login.php');
    }
?>