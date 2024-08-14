<?php

if (!empty($_GET["id"])){
    $id=$_GET["id"];
    $sql=$conexion->query("delete from usuarios where id_usuario=$id");
    if ($sql ==1) {
        echo  "<div class='alert alert-success'> El Usuario Se elimino Correctamente  </div>";
    }else{
        echo  "<div class='alert alert warning'> Error no se pudo eliminar el Usuario  </div>";
    }
}




?>