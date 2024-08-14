<?php

  if (!empty($_POST["btnregistrar"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["usuario"]) and !empty($_POST["email"]) and !empty($_POST["pass"])){
            $id=$_POST["id"];
            $nombre=$_POST["nombre"];
            $apellido=$_POST["apellido"];
            $usuario=$_POST["usuario"];
            $email=$_POST["email"];
            $pass=$_POST["pass"];

            $sql=$conexion->query(" update usuarios set nombre='$nombre', apellido='$apellido', usuario='$usuario', email='$email', pass='$pass' where id_usuario=$id ");
            if ($sql==1){
                header("location:panel");
            }else {
                echo "<div class ='alert alert-danger'> Error no se pudo actualizar el usuario </div>";
            }
    
        }else{
        echo "<div class='alert alert-warning'> campo vacio </div>";
    }
  }


?>