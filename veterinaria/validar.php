<?php
include_once("conexion.php");
$usuario=$_POST['usuario'];
$clave=$_POST['contra'];
$consulta="SELECT correo, clave FROM login where correo='$usuario' and clave='$clave'";
$resultado=mysqli_query($con,$consulta);
$filas=mysqli_num_rows($resultado);
if ($filas>0) {
	session_start();
	$_SESSION['usuario']='Secretaria';
	header("location:registro.php");
}else{
header("location:index.php");
}
?>