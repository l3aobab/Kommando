<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Añadir un comando</title>
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
		</form>
	</div>

</body>
</html>