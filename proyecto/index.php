<?php require_once 'includes/conexion.php'; ?>

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
            <div class="col-lg-8">
                <div class="container bg-light bg-gradient p-3 bloque">
                    <p>Ultimas Entradas</p>
                    <div class="entrada">
                        <img src="assets/img/icon/file.png" width="20px"><span class="titulo ms-4">Titulo de la entrada</span>
                        <p class="contenido mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam architecto unde rerum ipsam? Doloremque nam earum, aliquid quis voluptatum optio, fuga odio deserunt maxime aperiam facilis nulla? Maxime, blanditiis eveniet?</p>
                    </div>
                    <div class="entrada">
                        <img src="assets/img/icon/file.png" width="20px"><span class="titulo ms-4">Titulo de la entrada</span>
                        <p class="contenido mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam architecto unde rerum ipsam? Doloremque nam earum, aliquid quis voluptatum optio, fuga odio deserunt maxime aperiam facilis nulla? Maxime, blanditiis eveniet?</p>
                    </div>
                    <div class="entrada">
                        <img src="assets/img/icon/file.png" width="20px"><span class="titulo ms-4">Titulo de la entrada</span>
                        <p class="contenido mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam architecto unde rerum ipsam? Doloremque nam earum, aliquid quis voluptatum optio, fuga odio deserunt maxime aperiam facilis nulla? Maxime, blanditiis eveniet?</p>
                    </div>
                    <div class="entrada">
                        <img src="assets/img/icon/file.png" width="20px"><span class="titulo ms-4">Titulo de la entrada</span>
                        <p class="contenido mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam architecto unde rerum ipsam? Doloremque nam earum, aliquid quis voluptatum optio, fuga odio deserunt maxime aperiam facilis nulla? Maxime, blanditiis eveniet?</p>
                    </div>
                    <div class="entrada">
                        <img src="assets/img/icon/file.png" width="20px"><span class="titulo ms-4">Titulo de la entrada</span>
                        <p class="contenido mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam architecto unde rerum ipsam? Doloremque nam earum, aliquid quis voluptatum optio, fuga odio deserunt maxime aperiam facilis nulla? Maxime, blanditiis eveniet?</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>