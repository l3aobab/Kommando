<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Añadir un comando</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="cuerpo2">
		<div class="vacio1"></div>
		<div class="muestra">
			<div class="cabecera">
				<!--Nombre de la tabla-->
				<div class="nombre2">
					<h2>Añadir un nuevo comando</h2>
				</div>
				<!--Boton para añadir un comando a la tabla-->
			</div>

			<div class="formulario1">
				<!--Formulario para introducir un nuevo comando a una tabla-->
				<form method="post" action="add_command.php">
					<label>Vendor</label>
					<input type="text" name="vendor"><br>
					<label>Comando completo</label>
					<input type="text" name="completo"><br>
					<label>Uso</label>
					<input type="text" name="uso"><br>
					<input type="submit" name="add" value="Añadir">
				</form>
			</div>

			<div class="botones">
				<!--Boton para volver al menu principal-->
				<div class="menu1">
					<form action="index.php" method="post">
						<input type="submit" name="volver" value="Menu principal" class="menu2">
					</form>
				</div>
			</div>
		<div class="vacio2"></div>
	</div>

	<?php 
		#Nos conectamos a la bbdd
		$conexion=mysqli_connect('localhost','root','','glosario');
		if ($conexion) {
			#Comprobamos que se han enviado datos en el formulario anterior y que los input[type=text] no se encuentran vacios
			if (isset($_POST['add']) && !empty($_POST['vendor']) && !empty($_POST['uso'])  && !empty($_POST['completo'])) {
				#Transformamos todos los $_POST en variables mas sencillas para trabajar y Cambiamos a minuscula la variable $vendor para que no haya incompatibilidades
				$vendor=strtolower($_POST['vendor']);
				$uso=$_POST['uso'];
				$completo=$_POST['completo'];
				$comprobacion=mysqli_query($conexion,"SHOW TABLES");

				if ($comprobacion != FALSE) {
					#Comprobamos en que tabla se añadira el comando que queremos introducir
					if ($vendor == "alcatel") {
						$consulta1=mysqli_query($conexion,"INSERT INTO alcatel (uso,completo) VALUES ('".$uso."','".$completo."')");
					}
				
					if ($vendor == "cisco") {
						$consulta2=mysqli_query($conexion,"INSERT INTO cisco (uso,completo) VALUES ('".$uso."','".$completo."')");
					}

					if ($vendor == "ruckus") {
						$consulta3=mysqli_query($conexion,"INSERT INTO ruckus (uso,completo) VALUES ('".$uso."','".$completo."')");
					}
				}
			}
		}

	?>

</body>
</html>