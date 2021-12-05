<?php 
session_start();
$usuario=$_SESSION["usuario"];
//datos enviados del formulario
$delegado = $_GET["delegado"];
$matdelegado = $_GET["matdelegado"];
$suplente = $_GET["suplente"];
$matsuplente = $_GET["matsuplente"];
$frente = $_GET["frente"];
$sigla = $_GET["sigla"];
$colores = $_GET["colores"];
$carta = $_GET["carta"];

$sql_c="UPDATE usuarios SET cartaCE='$carta',delegado='$delegado',matriculaDel='$matdelegado',suplente='$suplente',matriculaSup='$matsuplente',frente='$frente',sigla='$sigla',colores='$colores' WHERE usuario = '$usuario'";

// $sql_c="update academico.alumno set nombre='".$nombre."' where id=1";
$resultado_c=mysqli_query($conn, $sql_c);

//-----------------
$horafin2 = date('Y/m/d h:i:s', time());
$sql_actualizar="UPDATE seguimiento SET fechafin='$horafin2' WHERE usuario='$usuario' and proceso='P2'";
mysqli_query($conn, $sql_actualizar);

$sql_obtener="select * FROM seguimiento where usuario='".$usuario."'";
$resultado_obtener=mysqli_query($conn, $sql_obtener);
$fila_obtener=mysqli_fetch_array($resultado_obtener);
$nro = $fila_obtener["nro"];

$sql_nuevoProceso= "INSERT INTO seguimiento (nro,usuario,flujo,proceso,fechainicio) VALUES ('".$nro."','".$_SESSION['usuario']."','F1','P3','".$horafin2."')";
mysqli_query($conn, $sql_nuevoProceso);
 ?> 