<?php 

    require_once('conexion.php');
    $errores = array();
    if(!$db){
        $errores['connDB'] = "Se ha producido un error en la conexion a BD: ";
    } else{
        $nombre_categoria = $_POST['categoria'];
        if(empty($nombre_categoria)){
            $errores['nom_cat'] = "Debe insertar un nombre de categoria";
        } else {
            $sql = "INSERT INTO CATEGORIAS VALUES (null, '$nombre_categoria')";
            $insertar = mysqli_query($db, $sql);
            if(!$insertar){
                $errores['ins_cat'] = "ERROR BD: ".mysqli_error($db);
            } else{
                $_SESSION['completado'] = "Se ha creado la categoria con exito";
            }
        }
    }
    $_SESSION['errores'] = $errores;
    header('Location:../crear_categoria.php');
?>



    