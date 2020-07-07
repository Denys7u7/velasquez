<?php

    session_start();
    if (isset($_SESSION['usuario'])) 
    {
        require 'frontend/prodcutos-view.php';
    }
    else 
    {
        header('location: login.php');
    }
?>