
<?php

include "conexion.inc.php";

$flujo   = $_GET["flujo"];
$proceso = $_GET["proceso"];
$formulario = $_GET["formulario"];
include "procesos/".$formulario.".mot.inc.php";
//ahora podemos usar comandos SQL

if (isset($_GET["Siguiente"])) {
	
	$sql="select * from flujoproceso where flujo='".$flujo."' and proceso='".$proceso."'";
	
	$resultado=mysqli_query($conn, $sql);
	$fila=mysqli_fetch_array($resultado);
	$procesosiguiente = $fila["procesosiguiente"];
	if ($procesosiguiente == NULL) {
		header("Location: bandeja.php");
	}else{
		if ($proceso == 'P3') {
			$procesosiguiente = $bandera;
		}
		//echo $procesosiguiente;
		header("Location: desflujo.php?flujo=".$flujo."&proceso=".$procesosiguiente);
		
	}
	
	
}else{
	
	$sql="select * from flujoproceso where flujo='".$flujo."' and procesosiguiente='".$proceso."'";
	$resultado=mysqli_query($conn, $sql);
	$fila=mysqli_fetch_array($resultado);
	$proceso = $fila["proceso"];
	if ($proceso == " ") {
		header("Location: bandeja.php");
	}else{
		header("Location: desflujo.php?flujo=".$flujo."&proceso=".$proceso);
	}
	
	
}


?>


