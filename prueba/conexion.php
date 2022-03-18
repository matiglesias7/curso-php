<?php
    $host = 'localhost';
    $usuario = 'root';
    $pass = '';
    $db = 'proyecto';

 $conexion = mysqli_connect($host, $usuario, $pass, $db);
 mysqli_query($conexion, "SET NAMES 'utf-8'");