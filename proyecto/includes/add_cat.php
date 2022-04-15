<?php 
    require_once('conexion.php');
    var_dump($_POST);
    if(isset($_POST)){
        $nombre = $_POST['nombre_cat'];
        if(empty($nombre) || false){
            $_SESSION['errores']['categoria'] = "Debe ingresar un nombre";
        } else{
            $sql = "INSERT INTO categorias VALUES (null, $nombre)";
            $insertar = mysqli_query($db, $sql);
            if (!$insertar){
                $_SESSION['errores']['categoria_query'] = "Ha ocurrido un error en la insercion de la categoria";
            }
            header('Location:add_cat.php');
        }
    }


    