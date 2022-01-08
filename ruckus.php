<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ruckus</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="cuerpo">
		<div class="vacio1"></div>
		<div class="muestra">
			<div class="cabecera">
				<!--Nombre de la tabla-->
				<div class="nombre">
					<h2>Ruckus</h2>
				</div>
			</div>

			<div class="comandos">
				<?php 
					$conexion=mysqli_connect('localhost','root','','glosario');
					if ($conexion) {
						$switch=mysqli_query($conexion, "SELECT * FROM ruckus");
						if ($switch) {
							while ($fila=mysqli_fetch_array($switch)) {
								$tipo=$fila['tipo'];
								$uso=$fila['uso'];
								$completo=$fila['completo'];
								echo "
									<div class='campos'>",$completo,"</div>
									<div class='campos'>",$tipo,"</div>
									<div class='campos'>",$uso,"</div>
								";
							}
						}
					}
				?>
				<!--Boton para añadir un comando a la tabla-->
				<div class="add">
					<form method="post" action="add_command.php">
						<input type="submit" name="add" value="Añadir comando">
					</form>
				</div>
				</div>
			</div>
		<div class="vacio2"></div>
	</div>		
</body>
</html>