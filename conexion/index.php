<?php
    // Conexion a Base de Datos
    $conexion = mysqli_connect("localhost", "root", "", "mibase");


    // Probar la conexion
    if(mysqli_connect_errno()){
        echo "La conexion a la base de datos MySQL ha fallado: ".mysqli_connect_error;
    } else {
        echo "Conexion establecida con exito";
    }

    // Consulta para configurar la codificacion de caracteres (Para mostrar tildes y ñ correctamente)
    mysqli_query($conexion, "SET NAMES 'utf-8'");

    // Consulta SELECT desde PHP
    $query = mysqli_query($conexion, 'select * from Notas'); // Devolvera un objeto de toda la consulta, no los datos

    // $notas = mysqli_fetch_assoc($query); // Solo mostrara la primera row de todo el resultado

    while ($nota = mysqli_fetch_assoc($query)){ // Recorrer todas las row que vienen de la query
        var_dump($nota);
    }

    // Insertar en la base de datos
    $sql = "INSERT INTO NOTAS VALUES (null, 'NOTA 3', 'AVANCE PHP', 'YELLOW')";

    $insert = mysqli_query($conexion, $sql);

    if($insert){ // Verificar si se hizo la insercion (devuelve true o false)
        echo "INSERT realizado correctamente";
    } else {
        echo "Hubo un error con el INSERT: ".mysqli_error($conexion);
    }
?>

