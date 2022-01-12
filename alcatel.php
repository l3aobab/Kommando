<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Alcatel</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="cuerpo">
		<div class="vacio1"></div>
		<div class="muestra">
			<div class="cabecera">
				<!--Nombre de la tabla-->
				<div class="nombre">
					<h2>Alcatel</h2>
				</div>
			</div>

			<div class="comandos">
				<div class="campos"><b>Comando completo</b><hr/></div>
				<div class="campos"><b>Uso</b><hr/></div>
				<?php 
					$conexion=mysqli_connect('localhost','root','','glosario');
					if ($conexion) {
						$switch=mysqli_query($conexion, "SELECT * FROM alcatel");
						if ($switch) {
							while ($fila=mysqli_fetch_array($switch)) {
								$uso=$fila['uso'];
								$completo=$fila['completo'];
								echo "
									<div class='campos' id='id_comando'>",$completo,"</div>
									<div class='campos' id='id_comando'>",$uso,"</div>
									";
							}
						}
					}
				?>

			</div>
			<hr/>
			<div class="botones">
				<!--Boton para añadir un comando a la tabla-->
				<div class="add1">
					<form method="post" action="add_command.php">
						<input type="submit" name="add" value="Añadir comando" class="add2">
					</form>
				</div>
				<!--Boton para volver al menu principal-->
				<div class="menu1">
					<form action="index.php" method="post">
						<input type="submit" name="volver" value="Menu principal" class="menu2">
					</form>
				</div>
			</div>
		</div>
		<div class="vacio2"></div>
	</div>
</body>
</html>