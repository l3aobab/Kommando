<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Añadir un comando</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	
	<div class="cabecera">
		<!--Nombre de la tabla-->
		<div class="nombre">
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
			<label>Tipo</label>
			<input type="text" name="tipo"><br>
			<label>Uso</label>
			<input type="text" name="uso"><br>
			<input type="submit" name="add" value="Añadir">
		</form>
	</div>

	<?php 
		#hay que arreglar esto que no va ni a tiros
		$conexion=mysqli_connect('localhost','root','','glosario');

		if ($conexion) {
			if (isset($_POST['add'])) {
				$vendor=$_POST['vendor'];
				$tipo=$_POST['tipo'];
				$uso=$_POST['uso'];
				$completo=$_POST['completo'];
				
				$consulta=mysqli_query($conexion,"INSERT INTO '{$vendor}' (tipo,uso,completo) VALUES ('{$tipo}','{$uso}','{$completo}') ");
			}

			else {
			echo "ja";
		}
		}

		else {
			echo "xd";
		}

	?>

</body>
</html>