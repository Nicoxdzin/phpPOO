<?php

    session_start();
    $user = $_SESSION['user'];

    if(!isset($_SESSION['user']) || !isset($_SESSION['user-password'])){
        header('location:index.php');
        echo $user;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
</head>
<body>
    <div class="">
        <a href="cadastro.php">Linkzão</a>
    </div>
</body>
</html>