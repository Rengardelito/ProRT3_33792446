<?php

if (!empty($_POST["btnregistrar"])) {
    if(!empty($_POST["nombre"])and !empty($_POST["apellido"])and !empty($_POST["usuario"])and !empty($_POST["email"])and !empty($_POST["pass"])){

    
       $nombre=$_POST["nombre"];
       $apellido=$_POST["apellido"];
       $usuario=$_POST["usuario"];
       $email=$_POST["email"];
       $pass=$_POST["pass"];

       $sql=$conexion->query(" insert into usuarios (nombre, apellido, usuario, email, pass) values ('$nombre', '$apellido', '$usuario', '$email', '$pass')");
       if (sql==1){
          echo '<div class="alert alert-success">Usuario registrado correctamente </div>';
        }else{
          echo '<div class="alert alert-danger"> Error al intentar registrar a un Usuario </div>';
         }
    
       

}else{
    echo '<div class="alert alert-warning"> Algunos de los campos esta vacio </div>';
}


 }
?>