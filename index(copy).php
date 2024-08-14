
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PANEL DE ADMINISTRADOR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
  </head>
<body>
  <script>

function eliminar(){
  var respuesta=confirm("Estas seguro que deseas eliminar?");
  return respuesta
}

  </script>
    <H1 class="text-center p-3"> Panel de Control </H1>
    <?php
    include "modelo/conexion.php";
    include "controlador/eliminar_usuario.php";

    ?>
    <div class="container-fluid row">
        <!-- <form class="col-4 p-3" method="POST">
            <h3 class="text-center">Registro de personas</h3>
            <?php
            
            include "controlador/registro_usuario.php";
            ?>
        <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">Nombre</label>
          <input type="text" class="form-control" name="nombre">
         </div>
         <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">Apellido</label>
          <input type="text" class="form-control" name="apellido">
         </div>
         <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">Usuario</label>
          <input type="text" class="form-control" name="usuario">
         </div>
         <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">correo</label>
          <input type="text" class="form-control" name="email">
         </div>
         <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">Contraseña</label>
          <input type="text" class="form-control" name="pass">
         </div>
         <div class="mb-3">         
          <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
        </form> -->
        <div class="col-8 p-5">
          <table class="table">
            <thead class="bg-info">
              <tr>
                  <th scope="col">id_usuario</th>
                  <th scope="col">nombre</th>
                  <th scope="col">apellido</th>
                  <th scope="col">usuario</th>
                  <th scope="col">correo</th>
                  <th scope="col">contraseña</th>
                  <th scope="col"></th>

                                  </th>
                </tr>
            </thead>
  <tbody>

    <?php
    include "modelo/conexion.php";
    $sql=$conexion->query(" select * from usuarios");
    
    while ($datos=$sql->fetch_object()){ ?>

<tr>
      <td><?= $datos->id_usuario?></td>
      <td><?= $datos->nombre?></td>
      <td><?= $datos->apellido?></td>
      <td><?= $datos->usuario?></td>
      <td><?= $datos->email?></td>
      <td><?= $datos->pass?></td>
      <td>
        <a href="modificar_usuario.php?id=<?= $datos->id_usuario ?>">editar</a>
        <a onclick="return eliminar()" href="index(copy).php?id=<?= $datos->id_usuario ?>">eliminar </a>
      </td>
</tr>
    <?php }
   




?>
  </tbody>
</table>
        </div>
        </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<footer>
                <a  class="footer-content" href="https://www.facebook.com">
                    <img src="https://st.depositphotos.com/4083027/61472/v/450/depositphotos_614720314-stock-illustration-letter-icon-social-media-icon.jpg"
                class="miicono">
                    Facebook
                </a>

                <a  class="footer-content" href="https://mail.google.com/mail/?authuser=0">
                    <img src="https://w7.pngwing.com/pngs/712/520/png-transparent-google-mail-gmail-logo-icon-thumbnail.png"
                class="miicono">
                    elbodegon@gmail.com
                </a>

                <a class="footer-content" href="https://web.whatsapp.com/">
                    <img src="https://img.freepik.com/psd-gratis/icono-3d-aplicacion-redes-sociales_23-2150049563.jpg?w=740&t=st=1716410656~exp=1716411256~hmac=985aec15ab4354f420cac604ad963988c387513ed8fb6598b8fc48ac64ea1603"
                class="miicono">
                    +5493794735149 respuesta <span>inmediata!</span>
                </a>
    <div>
        <p class="texto2" id="copyright">Derechos de autor © 2024| Vinoteca EL BODEGON.</p>
    </div>
    <script src="assets/js/bootstrap.bundle.min.js" integrity=" " crossorigin=" "></script>
</footer>


</body>
</html>