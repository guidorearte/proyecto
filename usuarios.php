<?php    
       session_start();
        
        if(isset($_SESSION['u_usuario'])){
        echo "BIENVENIDO usuario!";

        echo "<a href='cerrar_sesion2.php'>Cerrar sesion </a>"; }

         else{
         	header("Location: login.php");
         } 

      ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="estilos.css">
  <title>Sesion</title>
</head>
<body>
	<style type="text/css">
		body{

			background-color: red;
		}
	</style>

	<h1><a href="home.html">Para continuar, click aqui.</a></h1>
</body>
</html>