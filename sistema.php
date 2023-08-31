<?php

    session_start();

    if(!isset($_SESSION['usuario']) && !isset($_SESSION['senha']) || empty($_SESSION['usuario'])){
        header('location:index.php');
    }