<?php 
    require_once 'includes/funciones.php'; 
?>
<div class="col-lg-4 mb-5">
    <div class="container bg-light bg-gradient bloque">
        <div class="form p-4">
            <p class="fs-4 fw-bold">Entrar a la web</p>
            <form action="ingreso.php" method="POST">
                <div class="form-group">
                    <label for="usuario">Usuario:</label>
                    <input type="text" class="form-control" name="usuario" id="usuario">
                </div>
                <div class="form-group">
                    <label for="usuario">Contraseña:</label>
                    <input type="password" class="form-control" name="contraseña" id="contraseña">
                </div>
                <div class="mt-4">
                    <button class="btn btn-primary">Entrar</button>
                </div>
            </form>
        </div>
    </div>
    <div class="form p-4 mt-5 bg-light bg-gradient bloque">

        <p class="fw-bold">Registro</p>
        <form action="registro.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" name="nombre" id="nombre">
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>

            </div>
            <div class="form-group">
                <label for="apellidos">Apellidos:</label>
                <input type="text" class="form-control" name="apellidos" id="apellidos">
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : ''; ?>
            </div>
            <div class="form-group">
                <label for="usuario">Email:</label>
                <input type="text" class="form-control" name="email" id="email">
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>
            </div>
            <div class="form-group">
                <label for="usuario">Contraseña:</label>
                <input type="password" class="form-control" name="contraseña" id="contraseña">
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'contraseña') : ''; ?>
            </div>
            <div class="mt-4">
                <button type="submit" name="submit" class="btn btn-primary">Registrar</button>
            </div>
        </form>
        <?php borrarErrores(); ?>
    </div>
</div>