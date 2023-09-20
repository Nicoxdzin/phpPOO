<?php
    include('../Classes/User.php');

    $user = new User();

    $_user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING);
    $_password = filter_input(INPUT_POST, 'user-password', FILTER_SANITIZE_STRING);

    if(!empty($_user) && !empty($_password)){
        $logar = $user->Login($_user,$_password);

        if (!empty($_user) || !empty($senha)) {
            if($logar == true)
            {
                session_start();
                $_SESSION['user'] = $_user;
                $_SESSION['user-password'] = $_password;
                header('location: ../sistema.php');
            }
            else
            {         
                header('location: ../index.php');     
            }  
        }
        else{
            echo "<script>alert('erro')</script>";
        }
    }
    else{
        header('location:../index.php');
    }
    

    
?>