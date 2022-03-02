<?php 
    if($_POST){
        header('Location:index.php');
    }
?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Login</title>
  </head>
    <body>
        <div class="container vh-100 d-flex align-items-center justify-content-center">
            <div class="card">
                <div class="card-header">
                    Login
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Usuario</label>
                            <input type="email" class="form-control" name="usuario">
                        </div>
                        <div class="mb-3">
                            <label for="pass" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" name="pass">
                        </div>
                        <div class="mt-5 d-flex justify-content-center">
                            <button type="submit" class="btn btn-danger">Ingresar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>