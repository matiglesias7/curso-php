<?php
    require_once 'includes/conexion.php';

    if(isset($_POST)){
        $email = $_POST['correo'];
        $contraseña = $_POST['contraseña'];

        if (empty($email)){
            $_SESSION['erroreslog']['correo'] = "Debe ingresar un nombre de usuario valido";
        }

        if (empty($contraseña)){
            $_SESSION['erroreslog']['contraseña'] = "Debe ingresar una contraseña";
        }

        if (!isset($_SESSION['erroreslog'])){ 
            $query = "SELECT * FROM USUARIOS WHERE email = '$email' LIMIT 1";
            $login = mysqli_query($db, $query);

            if ($login){
                $objUsr = mysqli_fetch_assoc($login);
                $verify_pwd = password_verify($contraseña, $objUsr['password']);
                if ($verify_pwd){
                    $_SESSION['usuario'] = $objUsr;
                    if (isset($_SESSION['errorlogin'])){
                        SESSION_UNSET($_SESSION['errorlogin']);
                    }
                } else {
                    $_SESSION['errorlogin'] = "Usuario/Contraseña incorrectas";
                }
            }
        }  
        header('Location:index.php');
    }