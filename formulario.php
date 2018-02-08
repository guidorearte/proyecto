<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<title></title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
	<center>
		<form action="proceso_guardar.php" method="post"><br></br>
			<input type="text" class="form-control" required name="nombre" placeholder="nombre..." value=""><br></br>
			<input type="text" class="form-control" required name="apellido" placeholder="apellido..." value=""><br></br>
			<input type="text" class="form-control" required name="correo" placeholder="correo..." value=""><br></br>
			<input type="submit" class="btn btn-primary" value="Aceptar"><br></br>
			<input type="reset" class="btn btn-primary" value="Borrar"><br></br>
		</form>
		
	</center>

</body>
</html>