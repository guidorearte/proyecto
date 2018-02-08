<?php  

include'conexion2.php';

$usuario= $_POST['usuario'];
$contrasena= $_POST['contrasena'];


$query= "INSERT INTO usuarios(usuario, contrasena) VALUES('$usuario', '$contrasena')";
$resultado= $conexion->query($query);

if($resultado){

	
	header("location: login.php");
}

 else{
 	echo "Error: no se puede registrar";
 }

?>