<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Glosario</title>
</head>
<body>
	<div class="vendors">
		<?php
			#conexion con la base de datos
			$conexion=mysqli_connect('localhost','root','','glosario');

			if ($conexion) {
				$ver=mysqli_query($conexion,"SHOW TABLES");
				if ($ver) {
					while ($fila=mysqli_fetch_array($ver)) {
						#aqui hay que hacer divs con cada mierda
						echo "<div class='tabla'><a href='".$fila[0].".php'>" . $fila[0] . "</a></div>";
					}
				}
				else {
					echo "xd";
				}
			}

			else {
				echo "ja";
			}
		?>
		
	</div>
</body>
</html>