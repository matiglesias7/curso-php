<?php
    SESSION_START();
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "proyecto";
    $db = mysqli_connect($server, $username, $password, $database);

    mysqli_query($db, "SET NAMES 'utf-8'");

    //INICIAR SESION
    
?>