<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Flujo</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<?php
	//-----------------------------------
	//      leer el flujo
	//-----------------------------------
	include "conexion.inc.php";

	$flujo = $_GET["flujo"];
	$proceso = $_GET["proceso"];
	//ahora podemos usar comandos SQL
	$sql       = "select * from flujoproceso where flujo='".$flujo."' and proceso='".$proceso."'";
	$resultado = mysqli_query($conn, $sql);
	$fila = mysqli_fetch_array($resultado);

	include 'procesos/'.$fila['formulario'].'.cab.inc.php';
		
	?>
	
	<form method="GET" action="motflujo.php">
		<?php include 'procesos/'.$fila['formulario'].'.inc.php'?>
		<br>
		<input type="hidden" name="formulario" value="<?php echo $fila['formulario']; ?>">
		<input type="hidden" name="flujo" value="<?php echo $flujo; ?>">
		<input type="hidden" name="proceso" value="<?php echo $proceso; ?>">
		<input type="submit" name="Anterior" value="Anterior" class="btn btn-success">
		<input type="submit" name="Siguiente" value="Siguiente" class="btn btn-primary">
		
	</form>
</div>	
</body>
</html>


