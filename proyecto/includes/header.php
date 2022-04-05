<?php
    require_once('funciones.php');
    $url = 'http://'.$_SERVER['HTTP_HOST'];
?>

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
                    <a class="nav-link" href=<?php echo $url."/curso-php/proyecto/uno.php"; ?>>Categoria 1</a>
                    <a class="nav-link" href=<?php echo $url."/curso-php/proyecto/cat_dos.php"; ?>>Categoria 2</a>
                    <a class="nav-link" href=<?php echo $url."/curso-php/proyecto/cat_tres.php"; ?>>Categoria 3</a>
                    <a class="nav-link" href=<?php echo $url."/curso-php/proyecto/cat_cuatro.php"; ?>>Categoria 4</a>
                    <a class="nav-link" href=<?php echo $url."/curso-php/proyecto/sobre.php"; ?>>Sobre Nosotros</a>
                    <a class="nav-link" href=<?php echo $url."/curso-php/proyecto/contacto.php"; ?>>Contacto</a>
                </div>
            </div>
            <?php echo isset($_SESSION['usuario']) ? mostrarMensaje($_SESSION['usuario'], 'nombre') : ''; ?>
        </div>
    </nav>
</div>