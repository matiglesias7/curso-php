<?php
    if(isset($_POST)){
        requiere_once 'includes/conexion.php';
        SESSION_START();
        
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
        $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
        $email = isset($_POST['email']) ? $_POST['email'] : false;
        $contraseña = isset($_POST['contraseña']) ? $_POST['contraseña'] : false;
        
        $errores = array();

        // Validar campos antes de enviar a BD
        // Se valida que no venga vacio (!empty), que no sea tipo numerico(!is_numeric), y que no incluya algun numero mediante expresion regular para nombre y apellido (!preg_match y expresion)
        if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
            echo "Nombre: ".$nombre."</br>";
        } else {
            $errores['nombre'] = "Nombre invalido o Campo vacio";
        }

        if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)){
            echo "Apellidos: ".$apellidos."</br>";
        } else {
            $errores['apellidos'] = "Apellidos invalidos o Campo vacio";
        }

        if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "Email: ".$email."</br>";
        } else {
            $errores['email'] = "Email no invalido o Campo vacio";
        }

        if(!empty($contraseña)){
            echo "Contraseña: ".$contraseña."</br>";
        } else {
            $errores['contraseña'] = "Contraseñas vacia o erronea";
        }

        // Validar que no haya errores antes de enviar a BD (El array de errores debe estar en 0, si hay un error no se envia a BD)
        if (count($errores) == 0){

            // CIFRAR LA CONTRASEÑA YA QUE NO PUEDE APARECER COMO TEXTO PLANO (ILEGAL)
            // Sintaxis: password_hash(contraseña, tipo encriptacion, opciones(en este caso cifrar 4 veces))
            $contraseña_hash = password_hash($contraseña, PASSWORD_BCRYPT, ['cost'=>4]);

            //VERIFICAR CONTRASEÑA CON HASH SIN SABER LA CONTRASEÑA
            $pass_verify = password_verify($contraseña, $contraseña_hash);


            //INSERTAR DATOS EN LA BD
            $query = "INSERT INTO USUARIO VALUES (null, $nombre, $apellidos, $email, $contraseña, CURDATE())";

            $insertar = mysqli_query($db, $query);

            if($insertar){
                $_SESSION['completado'] = "El registro se ha completado con exito"
            } else {
                $_SESSION['errores']['general'] = "Fallo al guardar usuario";
            }

        } else {
             $_SESSION['errores'] = $errores;
        }
    }
    header('Location:index.php');
?>