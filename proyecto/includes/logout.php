<?php
    SESSION_START();

    if (isset($_SESSION['usuario'])){
        SESSION_DESTROY();
    }

    header('Location:../index.php');

?>