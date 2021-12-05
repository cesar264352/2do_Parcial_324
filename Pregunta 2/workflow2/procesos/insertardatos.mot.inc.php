<?php 
session_start();
$nombre=$_SESSION["usuario"];
//------------
	$horafin2 = date('Y/m/d h:i:s', time());
	$sql_actualizar="UPDATE seguimiento SET fechafin='$horafin2' WHERE usuario='$nombre' and proceso='P4'";
	mysqli_query($conn, $sql_actualizar);

	$sql_obtener="select * FROM seguimiento where usuario='".$nombre."'";
	$resultado_obtener=mysqli_query($conn, $sql_obtener);
	$fila_obtener=mysqli_fetch_array($resultado_obtener);
	$nro = $fila_obtener["nro"];

	$sql_nuevoProceso= "INSERT INTO seguimiento (nro,usuario,flujo,proceso,fechainicio) VALUES ('".$nro."','".$_SESSION['usuario']."','F1','P6','".$horafin2."')";
	mysqli_query($conn, $sql_nuevoProceso);
 ?> 
