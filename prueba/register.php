<?php
    require_once 'conexion.php';
    SESSION_START();
    $errores = array();
    if(isset($_POST)){
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
        $apellidos  = isset($_POST['apellidos']) ? $_POST['apellidos'] : null;
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $contraseña = isset($_POST['contraseña']) ? $_POST['contraseña'] : null;

        if(!empty($nombre) && !preg_match("/[0-9]/", $nombre)){
            $_SESSION['nombre'] = $nombre;
        } else {
            $_errores['nombre'] = 'Nombre invalido o campo vacio';
        }

        if(!empty($apellidos) && !preg_match("/[0-9]/", $apellidos)){
            $_SESSION['apellidos'] = $apellidos;
        } else {
            $_errores['apellidos'] = 'Apellidos invalido o campo vacio';
        }

        if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
            $_SESSION['email'] = $email;
        } else {
            $_errores['email'] = 'Correo invalido o campo vacio';
        }

        if(!empty($contraseña)){
            $pwd_hash = password_hash($contraseña, PASSWORD_BCRYPT, ['cost'=>4]);
        } else {
            $_errores['contraseña'] = 'Ingrese una Contraseña';
        }

        if($errores == 0){
            $query = "INSERT INTO USUARIOS VALUES (null, '$nombre', '$apellidos', '$email', '$pwd_hash', CURDATE())";
            $insertar = mysqli_query($db, $query);

            $_SESSION['conexion'] = 'hola';
        }

        $_SESSION['errores'] = $errores;

        echo $_SESSION['nombre'].'</br>';
        echo $_SESSION['apellidos'].'</br>';
        echo $_SESSION['email'].'</br>';
    }

    header('Location:index.php');
?>