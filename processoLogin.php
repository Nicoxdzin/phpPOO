<?php
    include('Classes/Usuario.php');

    $user = new Usuario();

    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

    echo $usuario,$senha;
    

    $logar = $user->Logar($usuario,$senha);

    if (!empty($usuario) || !empty($senha)) {
        if($logar == true)
        {
            session_start();
            $_SESSION['usuario'] = $usuario;
            $_SESSION['senha'] = $senha;
            header('location:sistema.php');
        }
        else
        {
            echo "<script>alert('Usuário ou senha não coincidem')</script>";
            header('location:index.php');           
        }  
    }
    else{
        echo "<script>alert('erro')</script>";
    }
?>