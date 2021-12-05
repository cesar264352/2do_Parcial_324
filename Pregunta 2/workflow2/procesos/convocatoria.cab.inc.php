<?php 
session_start();
$usuario1=$_SESSION["usuario"];
$sql_c="select * from usuarios where usuario='$usuario1'";

$resultado_c=mysqli_query($conn, $sql_c);
$fila_c=mysqli_fetch_array($resultado_c);
$nombre=$fila_c["nombre"];

 ?>