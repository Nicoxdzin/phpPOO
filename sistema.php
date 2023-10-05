<?php

    include('Classes/User.php');
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
    <div>
        <?php 
    $user = new User();

    $usuarios = $user->listarUsuarios();
    
    if ($usuarios !== false) {
        foreach ($usuarios as $usuario) {
            echo "Nome de Usuário: " . $usuario['username'] . "<br>";
            echo "Email: " . $usuario['email'] . "<br>";
            $imageData = $usuario['image_data']; // Dados binários da imagem.
            $imageType = $usuario['image_type']; // Tipo da imagem (por exemplo, 'image/jpeg').
            $base64Image = 'data:' . $imageType . ';base64,' . base64_encode($imageData);
            echo "<img src=$base64Image alt='' style='height: 150px;'><br>";
            // Exiba outras informações do usuário, se necessário.
            echo "<br>";
        }
    } else {
        echo "Erro ao listar os usuários.";
    }
        ?>
    </div>
</body>
</html>