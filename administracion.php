<?php    
       session_start();
        
        if(isset($_SESSION['u_usuario'])){
        echo "BIENVENIDO administrador!";

        echo "<a href='cerrar_sesion.php'>Cerrar sesion </a>"; }

         else{
         	header("Location: login.php");
         } 

      ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="estilos.css">
	<title>Tabla</title>
   <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
  <style type="text/css">
    body{

      background: grey;
    }
  </style>
      <center>
      	<table bgcolor="red" border="3">
      		 <thead>
      		 	 <tr>
      		 	<th colspan="1"><a class="btn btn-primary" href="formulario.php">Nuevo</a></th>
      		 	<th colspan="5">Lista de usuarios</th>
      		 	</tr>
      		 </thead>
      		 <tbody>
      		         <tr>
      		         	 <td>Id</td>
      		         	 <td>Nombre</td>
      		         	 <td>Apellido</td>
      		         	 <td>Correo</td>
      		         	 <td colspan="2">Operaciones</td>
      		         </tr>
      		         <?php  
                      
                      include'conexion1.php';
                      $query= "SELECT * FROM usuarios ";
                      $resultado= $conexion->query($query);
                      while($row=$resultado->fetch_assoc()){
                      	?>

                      	<tr>
                      		<td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['nombre']; ?></td>
                            <td><?php echo $row['apellido']; ?></td>
                            <td><?php echo $row['correo']; ?></td>
                            <td ><a class="btn btn-warning" href="modificar.php?id=<?php echo $row['id']; ?>">Modificar</a></td>
                            <td><a class="btn btn-danger" href="eliminar.php?id=<?php echo $row['id']; ?>">Eliminar</a></td>
                      	</tr>

                      	<?php  

                          }



                      	?>
      		 </tbody>
      	</table>
      </center>
</body>
</html>