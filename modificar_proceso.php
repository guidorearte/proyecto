<?php  

include 'conexion1.php';

$id= $_REQUEST['id'];
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$correo= $_POST['correo'];

$query= "UPDATE usuarios SET nombre='$nombre', apellido= '$apellido', correo= '$correo' WHERE id= '$id' ";
$resultado= $conexion->query($query);

if($resultado){

	header("location: administracion.php");
}

else{

	echo "Error";
}




?>