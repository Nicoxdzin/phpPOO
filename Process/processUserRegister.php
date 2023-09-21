<?php
    include('../Classes/User.php');

    $user = new User();

    $_img = $_FILES['img']; //!empty($_FILES['img']) ? $_FILES['img'] : NULL;
    $_user = filter_input(INPUT_POST, 'user');
    $_email = filter_input(INPUT_POST, 'email');
    $_password = filter_input(INPUT_POST, 'user-password');
    $_confirmPassword = filter_input(INPUT_POST, 'confirm-password');

    if(!empty($_user) &&  !empty($_email) && !empty($_password) && !empty($_confirmPassword)){

        $_hashedPassword = password_hash($_password, PASSWORD_DEFAULT);

        $signIn = $user->Cadastrar($_user, $_email, $_hashedPassword, $_img);

        if ($_password == $_confirmPassword) {
            
            if($signIn == true)
            {
                session_start();
                $_SESSION['user'] = $_user;
                $_SESSION['user-password'] = $_password;
                header('location:../sistema.php');
            }
            else
            {         
                header('location:../index.php');     
            }  
        }
        else{
            echo "<script>alert('erro')</script>";
        }
    }
    else{
        echo "<script>alert('erro')</script>";
    }
    

    
?>