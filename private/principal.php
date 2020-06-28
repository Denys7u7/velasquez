<?php
    session_start();
    if (isset($_SESSION['usuario'])) 
    {
        require 'frontend/principal-view.php';
    }
    else 
    {
        header('location: login.php');
    }
?>