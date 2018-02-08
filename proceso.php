<?php  

session_start();

$usuario= $_POST['usuario'];
$contrasena= $_POST['contrasena'];

include'conexion2.php';

$proceso1= $conexion->query("SELECT * FROM administrador WHERE usuario='$usuario' AND contrasena='$contrasena' ");
$proceso2= $conexion->query("SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasena='$contrasena' ");

if($resultado= mysqli_fetch_array($proceso1)){

    $_SESSION['u_usuario']= $usuario;
    header("Location: administracion.php");
}

else if($resultado= mysqli_fetch_array($proceso2)){

    $_SESSION['u_usuario']= $usuario;
    header("Location: usuarios.php");
}

 else{
    header("Location: login.php");
    
 }

?>