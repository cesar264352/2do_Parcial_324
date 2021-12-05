<?php 
session_start();
$usuario=$_SESSION["usuario"];
$sorteo = $_GET["random"];
$sql_c="UPDATE usuarios SET sorteo='$sorteo' WHERE usuario = '$usuario'";
$resultado_c=mysqli_query($conn, $sql_c);


//------------
	$horafin2 = date('Y/m/d h:i:s', time());
	$sql_actualizar="UPDATE seguimiento SET fechafin='$horafin2' WHERE usuario='$usuario' and proceso='P6'";
	mysqli_query($conn, $sql_actualizar);

	


 ?> 