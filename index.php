
<?php
include("includes/header.php");
?>
<div class="container p-4">
    <div class="row">
        <div class="col-6">
        <?php
            include 'model.php';
            $modelo =new Conectar();
            $insert = $modelo->insert();
        ?>
            <form action="#" method="post">      
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="nombre" class="form-control" placeholder="nombre de usuario" alt="ingrese el nombre de usuario">
                </div>
                <div class="form-group">
                    <label>Apellido</label>
                    <input type="text" name="lastname" class="form-control" placeholder="apellido de usuario" alt="ingrese el apellido de usuario">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" placeholder="email de usuario" alt="ingrese el email de usuario">
                </div>
                <div class="form-group">
                    <label>CUIT</label>
                    <input type="text" name="cuit" class="form-control" placeholder="ingrese el CUIT" alt="ingrese el CUIT" disabled>
                </div>
                <div class="form-group">
                    <label>Razon Social</label>
                    <input type="text" name="razon_social" class="form-control" placeholder="razón social" alt="ingresar razón social" disabled>
                </div>
                <div class="form-group">
                    <label>Alias</label>
                    <input type="text" name="alias" class="form-control" placeholder="ingrese el alias" alt="ingresar alias de CBU" disabled>
                </div>
                <div class="form-group">
                    <label>CBU</label>
                    <input type="text" name="cbu" class="form-control" placeholder="ingrese la CBU" alt="ingresar CBU" disabled>
                </div>
                <button type="submit" name="guardar_sesion" class="btn btn-secondary btn-block p-2">Guardar sesión y datos.</button>
            </form>
        </div>
    </div>
</div>
<?php
include("includes/footer.php");
?>
