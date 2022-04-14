<?php
    require_once('funciones.php');
    $url = 'http://'.$_SERVER['HTTP_HOST'];
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
    <div class="mb-5" id="logo">
        <a href="index.html">
            <h1>Blog de Videojuegos</h1>
        </a>
        </div>
        <nav class="navbar navbar-expand-sm navbar-light bg-dark navbar-dark">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href=<?php echo $url."/curso-php/proyecto/index.php"; ?>>Inicio</a>
                        <?php 
                            $categorias = obtenerCategorias($db);
                            while($categoria = mysqli_fetch_assoc($categorias)): 
                        ?>
                            <a class="nav-link" href="categoria.php?id=<?=$categoria['id']?>"><?=$categoria['nombre_cat']?></a>
                        <?php endwhile; ?>
                        <a class="nav-link" href=<?php echo $url."/curso-php/proyecto/sobre.php"; ?>>Sobre Nosotros</a>
                        <a class="nav-link" href=<?php echo $url."/curso-php/proyecto/contacto.php"; ?>>Contacto</a>
                    </div>
                </div>
                <?php echo isset($_SESSION['usuario']) ? mostrarMensaje($_SESSION['usuario'], 'nombre') : ''; ?>
            </div>
        </nav>
    </div>