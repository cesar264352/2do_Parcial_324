<?php 
session_start();
$nombre=$_SESSION["usuario"];
$sql_c="select * FROM usuarios where usuario='".$nombre."'";
$resultado_c=mysqli_query($conn, $sql_c);


//-----------------
$horafin = date('Y/m/d h:i:s', time());
$sql_actualizar="UPDATE seguimiento SET fechafin='".$horafin."' where usuario='".$nombre."'";
mysqli_query($conn, $sql_actualizar);

$sql_obtener="select * FROM seguimiento where usuario='".$nombre."'";
$resultado_obtener=mysqli_query($conn, $sql_obtener);
$fila_obtener=mysqli_fetch_array($resultado_obtener);
$nro = $fila_obtener["nro"];
$fila_obtener["flujo"];


$sql_nuevoProceso= "INSERT INTO seguimiento (nro,usuario,flujo,proceso,fechainicio) VALUES ('".$nro."','".$_SESSION['usuario']."','F1','P2','".$horafin."')";
mysqli_query($conn, $sql_nuevoProceso);

 ?> 