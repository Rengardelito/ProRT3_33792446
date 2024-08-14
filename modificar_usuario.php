<?php
include "modelo/conexion.php";
$id=$_GET["id"];

$sql=$conexion->query("select * from usuarios where id_usuario=$id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<form class="col-4 p-3" method="POST">
            <h3 class="text-center">Modificar Usuario</h3>
            <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
            <?php
            include "controlador/modificar_usuario.php";
            while ($datos=$sql->fetch_object()) {
            ?>
              <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre ?>">
               </div>
                
               <div class="mb-3">
                         <label for="exampleInputEmail1" class="form-label">Apellido</label>
                        <input type="text" class="form-control" name="apellido" value="<?= $datos->apellido ?>">
               </div>


               <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Usuario</label>
                            <input type="text" class="form-control" name="usuario" value="<?= $datos->usuario ?>">
                </div>
                
                
                <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">correo</label>
                            <input type="text" class="form-control" name="email" value="<?= $datos->email ?>">
                </div>
                
                <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Contraseña</label>
                            <input type="text" class="form-control" name="pass" value="<?= $datos->pass ?>">
                </div>

            <?php                                  }
            ?>
      
            
          <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificiar Usuario</button>
        </form>
            
</body>
</html>