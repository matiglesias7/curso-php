<?php 
    require_once 'includes/conexion.php'; 
?>

<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel='stylesheet' href='assets/css/style.css?v=<?php echo time(); ?>'>

    </head>
    <body class="container">
        <?php require_once 'includes/header.php'; ?>
        <div class="row p-5">
            <?php require_once 'includes/log.php'; ?>
            <div class="col-lg-9">
                <div class="container bg-light bg-gradient p-3 bloque">
                    <p class="mb-4">Ultimas Entradas</p>
                    <?php 
                        $entradas = obtenerEntradas($db);
                        while ($entrada = mysqli_fetch_assoc($entradas)):
                    ?>
                    <div class="entrada">
                        <div class="row">
                            <div class="col-1">
                                <img src="assets/img/icon/file.png" width="80px">
                            </div>
                            <div class="col-9">
                                <div class="row ms-2">
                                    <span class="titulo"><?=$entrada['titulo']?></span>
                                    <p><?=$entrada['nombre_cat']." | ".$entrada['fecha'] ?></p>
                                    <p>Escrito por: <?=$entrada['nombre'].' '.$entrada['apellidos'] ?></p>
                                    <p class="contenido mt-3"><?=$entrada['descripcion']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;?>
                </div>
            </div>
        </div>
    </body>
</html>