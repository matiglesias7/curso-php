<?php
    session_start();
    $host = 'localhost';
    $usuario = 'root';
    $pass = '';
    $db = 'proyecto';

    $conexion = mysqli_connect($host, $usuario, $pass, $db);
    mysqli_query($conexion, "SET NAMES 'utf-8'");
    
    if ($conexion){
        $_SESSION['conexion'] = 'Conectado correctamente a la BD';
 }
