<?php 
session_start();
$nombre=$_SESSION["usuario"];
$proceso1=$_GET["proceso"];

$sql_a="select * from flujocondicionante where proceso='$proceso1'";
$resultado_a=mysqli_query($conn, $sql_a);
$fila_a=mysqli_fetch_array($resultado_a);
echo $proceso;


if ($_GET["sw"] == 'Si') {
	$bandera = $fila_a["Si"];
	//echo $bandera;
	$sql_c="select * from usuarios where usuario='$nombre1'";
	$resultado_c=mysqli_query($conn, $sql_c);
	$fila_c=mysqli_fetch_array($resultado_c);
	$r1=$fila_c["cartece"];
	$r2=$fila_c["progpolitico"];
	$r3=$fila_c["plantrabajo"];
	$r4=$fila_c["forminscripcion"];
	$r5=$fila_c["cartacompromiso"];

//------------
	$horafin2 = date('Y/m/d h:i:s', time());
	$sql_actualizar="UPDATE seguimiento SET fechafin='$horafin2' WHERE usuario='$nombre' and proceso='P3'";
	mysqli_query($conn, $sql_actualizar);

	$sql_obtener="select * FROM seguimiento where usuario='".$nombre."'";
	$resultado_obtener=mysqli_query($conn, $sql_obtener);
	$fila_obtener=mysqli_fetch_array($resultado_obtener);
	$nro = $fila_obtener["nro"];

	$sql_nuevoProceso= "INSERT INTO seguimiento (nro,usuario,flujo,proceso,fechainicio) VALUES ('".$nro."','".$_SESSION['usuario']."','F1','P4','".$horafin2."')";
	mysqli_query($conn, $sql_nuevoProceso);
	
}else{
	$bandera = $fila_a["No"];

	//------------
	$horafin2 = date('Y/m/d h:i:s', time());
	$sql_actualizar="UPDATE seguimiento SET fechafin='$horafin2' WHERE usuario='$nombre' and proceso='P3'";
	mysqli_query($conn, $sql_actualizar);

	$sql_obtener="select * FROM seguimiento where usuario='".$nombre."'";
	$resultado_obtener=mysqli_query($conn, $sql_obtener);
	$fila_obtener=mysqli_fetch_array($resultado_obtener);
	$nro = $fila_obtener["nro"];

	$sql_nuevoProceso= "INSERT INTO seguimiento (nro,usuario,flujo,proceso,fechainicio) VALUES ('".$nro."','".$_SESSION['usuario']."','F1','P5','".$horafin2."')";
	mysqli_query($conn, $sql_nuevoProceso);
	
}




?> 
<input type="hidden" name="bandera" value="<?php echo $bandera;?>">



