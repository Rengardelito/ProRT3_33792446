<script>

function eliminar(){
  var respuesta=confirm("Estas seguro que deseas eliminar?");
  return respuesta
}

  </script>
  <?php
    include "modelo/conexion.php";
    include "controlador/eliminar_usuario.php";

    ?>
    <div class="container-fluid row">
    <?php
            
            include "controlador/registro_usuario.php";
            ?>




<div class="container mt-5">
    <div class="row justify-content-md-center"> 
        <div class="col-5">
            <?php if(session()->getFlashdata('msg')): ?> 
            <div class="alert alert-warning">
                <?= session()->getFlashdata('msg') ?> 
            </div>
            <?php endif; ?>
        <br><br>
        <?php if(session()->perfil_id == 1 ): ?> 
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
        <a onclick="return eliminar()" href="panel?id=<?= $datos->id_usuario ?>">eliminar </a>
      </td>
</tr>
    <?php }
   




?>
  </tbody>
</table>
        </div>
        </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        
        
            <div>
            <img class="center" height="100px" width="100px" src="<?php echo base_url(' assets/img/cliente.jpg'); ?>">
            <h1>INICIASTE SESION COMO ADMINISTRADOR</h1>

        </div>

        <?php elseif(session()->perfil_id == 2 ):?> 

        <div>
            <img class="center" height="100px" width="100px" src="<?php echo base_url(' assets/img/admin.jpg'); ?>">
            <h1>INICIASTE SESION COMO CLIENTE</h1>
        </div>

            <?php endif; ?>
        </div>
    </div>
</div>