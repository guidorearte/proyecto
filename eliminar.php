<?php  

include 'conexion1.php';

$id= $_REQUEST['id'];

$query= "DELETE FROM usuarios WHERE id= '$id' ";
$resultado= $conexion->query($query);

if($resultado){

	header("location: administracion.php");
}

else {

	echo "Error";
}


?>