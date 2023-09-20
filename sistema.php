<?php

    session_start();
    $user = $_SESSION['user'];

    if(!isset($_SESSION['user']) || !isset($_SESSION['user-password'])){
        header('location:index.php');
        echo $user;
    }