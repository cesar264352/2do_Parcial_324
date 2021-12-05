<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bandeja</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	<?php

	session_start();

	include "conexion.inc.php";

	$sql0="select * from seguimiento where usuario='".$_SESSION['usuario']."'";
	$resultado0=mysqli_query($conn, $sql0);

	$fila_x=mysqli_fetch_array($resultado0);
	if ($fila_x == NULL) {
		$DateAndTime = date('Y/m/d h:i:s', time());
		
		$sql_insert= "INSERT INTO seguimiento (nro,usuario,flujo,proceso,fechainicio) VALUES ('120','".$_SESSION['usuario']."','F1','P1','".$DateAndTime."')";
		$resultado0=mysqli_query($conn, $sql_insert);
	}

	$sql="select * from seguimiento where usuario='".$_SESSION['usuario']."'";
	$resultado=mysqli_query($conn, $sql);

	$sql2="select * from usuarios where usuario='".$_SESSION['usuario']."'";
	$resultado2=mysqli_query($conn, $sql2);
	$fila_u=mysqli_fetch_array($resultado2);
	?>
	<h3 class="text-primary mt-5 mb-4">Bienvenido de Inscripcion de Usuario</h3>

	<div class="row">
		<div class="col-10"><p>Inicio sesion como universitario <?php echo $fila_u['nombre'];?></p></div>
		<div class="col-2"><a href="./salir.php" class="btn btn-warning">Cerrar Sesion</a></div>
	</div>
	
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Nro Seguimiento</th>
				<th>Flujo</th>
				<th>Proceso</th>
				<th>Fecha Inicio</th>
				<th>Accion</th>
			</tr>
		</thead>
      
    	<tbody>
		<?php 
		while ($fila=mysqli_fetch_array($resultado)) {
			echo "<tr>
					<td>".$fila['nro']."</td>
					<td>".$fila['flujo']."</td>
					<td>".$fila['proceso']."</td>
					<td>".$fila['fechainicio']."</td>
					<td><a href='desflujo.php?flujo=$fila[flujo]&proceso=$fila[proceso]' class='btn btn-success text-white'>Mostrar</a></td>
				</tr>";
		}
		 ?>
		<tbody>
	 </table>
	 </div>
</body>
</html>
