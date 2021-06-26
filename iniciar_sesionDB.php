<?php 

include('DB.php');
session_start();

$db = new DB();
$conexion = $db->conectarDB();

if(isset($_POST['iniciarSesionBtn'])){
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];

    $result = $db->login($email, $contraseña);
    print_r($result);
}

if ($result){
    $_SESSION['email'] = $email;
    
 header("Location: /sistemaApartamentos-master/index.php");
} else {
    $errores .= '<li>Datos incorrectos </li>';
}
    

  /*  if (!$result) {
        echo '<p class="error">Username password combination is wrong!</p>';
    } else {
      if (password_verify($contraseña, $result['contraseña'])) {
            $_SESSION['user_id'] = $result['ID'];
            echo '<p class="success">Congratulations, you are logged in!</p>';
        } else {
            echo '<p class="error">Username password combination is wrong!</p>';
        }
    } 
}
    */



/*
session_start();

$email=$_SESSION['email'];
$contraseña=$_SESSION['contraseña'];


if(isset($_SESSION['iniciarSesionBtn'])){
    $email=$_SESSION['email'];
    $contraseña=$_SESSION['contraseña'];
    header("Location: /sistemaApartamentos/index.php");
}
$errores = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];
    

    try{
        $conexion = new PDO ('mysql:host=localhost;dbname=sistemaapartamentos','root', '');
     
    }
    catch(PDOException $e){
        echo("Ha ocurrido el error al tatar de conectarse con la base de datos <br/>Código: ".$e->getCode()."<br/> Mensaje: ".$e->getMessage());
    }

    $statement = $conexion->prepare("SELECT * FROM usuarios WHERE email = '$email' AND contraseña = '$contraseña' ");
        $statement = $statement -> fetch();
    if ($resultado !== false){
        $_SESSION['email'] = $email;
        
       // header("Location: /sistemaApartamentos/registrarseDB.php");
    } else {
        $errores .= '<li>Datos incorrectos </li>';
    }
}

require 'registrarseDB.php';

*/

?>