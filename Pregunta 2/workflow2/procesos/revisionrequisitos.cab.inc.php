<?php 
session_start();
$usuarios1=$_SESSION["usuario"];
$sql_c="select * from usuarios where usuario='".$usuarios1."'";

$resultado_c=mysqli_query($conn, $sql_c);
$fila_c=mysqli_fetch_array($resultado_c);

$delegado1 = $fila_c["delegado"];
$matdelegado1 = $fila_c["matriculaDel"];
$suplente1 = $fila_c["suplente"];
$matsuplente1 = $fila_c["matriculaSup"];
$frente1 = $fila_c["frente"];
$sigla1 = $fila_c["sigla"];
$colores1 = $fila_c["colores"];
$carta1 = $fila_c["cartaCE"];



?>