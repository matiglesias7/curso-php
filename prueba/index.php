<?php 
    session_start();
    include 'recursos.php';
?>

<DOCTYPE html>
<html>
    <header>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel='stylesheet' href='assets/css/style.css?v=<?php echo time(); ?>'>
    </header>

    <body class="vh-100 d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="col-12">
                <div class="container bg-light bg-gradient">
                    <div class="form p-4">
                        <p class="fs-4 fw-bold">Entrar a la web</p>
                        <form action="login.php" method="POST">
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
            </div>
        </div>
        <div class="row">
            <div class="form p-4 mt-5 bg-light bg-gradient">
                <p class="fw-bold">Registro</p>
                <form action="register.php" method="POST">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" id="nombre">
                    </div>
                    <div class="form-group">
                        <label for="apellidos">Apellidos:</label>
                        <input type="text" class="form-control" name="apellidos" id="apellidos">
                    </div>
                    <div class="form-group">
                        <label for="usuario">Email:</label>
                        <input type="text" class="form-control" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="usuario">Contraseña:</label>
                        <input type="password" class="form-control" name="contraseña" id="contraseña">
                    </div>
                    <div class="mt-4">
                        <button type="submit" name="submit" class="btn btn-primary">Registrar</button>
                    </div>
                    <?php var_dump($_SESSION['conexion'])?>
                </form>
            </div>
        </div>
    </body>
</html>
