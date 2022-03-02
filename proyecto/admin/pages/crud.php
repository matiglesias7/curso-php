<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <?php include('../templates/header.php') ?>
    <div class="container d-flex mt-5">
        <div class="card">
            <div class="card-header">
                Datos de Libro
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="id" class="form-label">ID</label>
                        <input type="text" id="id" name="id" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" id="nombre" name="nombre" class="form-control">
                    </div>
                    <div class="mb-4">
                        <label for="img" class="form-label">Imagen</label>
                        <input type="file" id="img" name="img" class="form-control">
                    </div>
                    <div>
                        <button class="btn btn-success">Agregar</button>
                        <button class="btn btn-warning">Modificar</button>
                        <button class="btn btn-danger">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </body>
</html>