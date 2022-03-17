<?php
    function mostrarError($errores, $campo){
        $error = '';
        if (isset($errores[$campo]) && !empty($campo)){
            $error = "<div class='alerta alerta-error'>".$errores[$campo]."</div>";
        }

        return $error;
    }

    function borrarErrores(){
        $_SESSION['errores'] = null;
        $borrar = session_unset();

        return $borrar;
}