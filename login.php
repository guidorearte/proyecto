<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="estilos.css">
	<title></title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
    <a href="home.html" position="left">Volver a inicio</a>
  <center>
  	<form action="proceso.php" method="post"><br></br>
  	<input type="text" class="form-control" name="usuario" placeholder="usuario..." value=""><br></br>
  		<input type="password" class="form-control" name="contrasena" placeholder="contrasena..." value=""><br></br>
  		<input type="submit" class="btn btn-primary" value="Iniciar Sesion"><br></br>
  
  		<input type="reset" class="btn btn-primary" value="Borrar"><br></br>
    </form>

    <p> No tenes una cuenta? Podes registrarte gratis, haciendo <a href="registro_de_usuarios.php">Click</a></p>
  	
  </center>
</body>
</html>