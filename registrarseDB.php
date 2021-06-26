<?php
include('DB.php');

if(isset($_POST['botonRegistrarse'])){
    $nombre=$_POST['nombre'];
    $apellidos=$_POST['apellidos'];
    $email=$_POST['email'];
    $contraseña=$_POST['contraseña'];
   // $estado=$_POST['estado'];

    $transaccion = new DB();
    $consultaSQL = "INSERT INTO usuarios(nombre, apellidos, email, contraseña, estado) VALUES ('$nombre', '$apellidos', '$email', '$contraseña' , 1)";
    $transaccion->addData($consultaSQL);
}


?>