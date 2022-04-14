<?php
    require_once('conexion.php');
    function mostrarError($errores, $campo){
        $error = '';
        if (isset($errores[$campo]) && !empty($campo)){
            $error = "<div class='alerta alerta-error'>".$errores[$campo]."</div>";
        }

        return $error;
    }

    function mostrarMensaje($array, $campo){
        $mensaje = '';
        if (isset($array[$campo]) && !empty($campo)){
            $mensaje = "<div class='justify-content-end nombre'>Bienvenido ".$array[$campo]."</div>";
        }

        return $mensaje;
    }

    function borrarErrores(){
        $borrar = false;
        $_SESSION['errores'] = null;
        if (isset($_SESSION['completado'])){
            $_SESSION['completado'] = null;
        }
        $borrar = session_unset();

        return $borrar;
    }

    function obtenerCategorias($db){
        $sql = 'select * from categorias';
        $categorias = mysqli_query($db, $sql);
        $resultado = array();
        
        if($categorias && mysqli_num_rows($categorias) >=1){
            $resultado = $categorias;
        }

        return $resultado;
    }

    function obtenerEntradas($db){
        $sql = 'select e.*, c.*, u.* from entradas e JOIN categorias c ON c.id = e.categoria_id JOIN usuarios u ON e.usuario_id = u.id';
        $categorias = mysqli_query($db, $sql);
        $resultado = array();
        
        if($categorias && mysqli_num_rows($categorias) >=1){
            $resultado = $categorias;
        }

        return $resultado;
    }