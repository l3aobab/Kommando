<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Glosario</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="cuerpo">
		<div class="vacio1"></div>
		<div class="muestra">
			<h2>Elige un tipo de switch</h2>
			<div class="vendors">
				<?php
					#Nos conectamos a la bbdd
					$conexion=mysqli_connect('localhost','root','','glosario');
					if ($conexion) {
						#Mostramos el nombre de las tablas de nuestra bbdd
						$ver=mysqli_query($conexion,"SHOW TABLES");
						if ($ver) {
							while ($fila=mysqli_fetch_array($ver)) {
								echo "<a href='".$fila[0].".php'><div class='tabla'>" . $fila[0] . "</div></a>";
							}
						}
					}
				?>
				
			</div>
			<!--Boton para añadir un comando a la tabla-->
			<div class="add">
				<form method="post" action="add_command.php">
					<input type="submit" name="add" value="Añadir comando">
				</form>
			</div>
		</div>
		<div class="vacio2"></div>
	</div>
</body>
</html>