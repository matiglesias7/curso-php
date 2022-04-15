<?php 
    require_once '../includes/header.php'; 
?>
    
<div class="row p-5">
    <?php require_once '../includes/sidebar.php'; ?>
    <div class="col-lg-9 bloque d-flex align-items-center">
        <div class="container col-6">
            <h1 class="text-center mb-5">Añadir Categoria</h1>
            <form action="../includes/addcat.php" method="POST">
                <div class="form-group">
                    <div class="d-flex"> 
                        <label for="" class="form-label">Nombre Categoria</label>
                        <input type="text" class="form-control" name="categoria" id="categoria">
                    </div>
                    <div class="text-center mt-5">
                        <button class="btn btn-success">Enviar</button>
                    </div>
                    <?php if(isset($_SESSION['errores']['nom_cat'])): ?>
                        <div class="text-center mt-5"><p><?=$_SESSION['errores']['nom_cat'];?></p></div>
                    <?php endif;?>
                </div>
            </form>
        </div>
    </div>
</div>



