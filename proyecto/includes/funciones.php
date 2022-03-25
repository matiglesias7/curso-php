<?php
    function mostrarError($errores, $campo){
        $error = '';
        if (isset($errores[$campo]) && !empty($campo)){
            $error = "<div class='alerta alerta-error'>".$errores[$campo]."</div>";
        }

        return $error;
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