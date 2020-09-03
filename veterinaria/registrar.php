<?php
include_once("conexion.php");

function recorrer($query){
	$rows = [];
	while($row = $query->fetch_assoc()) {
		$rows[] = $row;
	}
	return $rows;
}


if (isset($_POST['boton'])) {
$nombre=strtoupper($_POST['nombre']);
$apellido=strtoupper($_POST['apellido']);
$cedula=$_POST['cedula'];
$correo=$_POST['correo'];
if ($correo=="") {$correo="NINGUNO";}
$direccion=strtoupper($_POST['direccion']);
$nmascota=strtoupper($_POST['nmascota']);
$edad=$_POST['emascota'];
$tipo=strtoupper($_POST['tipo']);
$sexo=strtoupper($_POST['sexo']);
$descripcion=strtoupper($_POST['descripcion']);
if ($descripcion=="") {
	$descripcion="NINGUNO";
}

$segundaConsuly="INSERT INTO clientes
values (NULL,'$nombre','$apellido','$direccion','$correo','$cedula',NOW())";
$resultado1=mysqli_query($con,$segundaConsuly);
$busqueda="SELECT id_usuario FROM clientes WHERE nombre = '$nombre'";
$resultado2=mysqli_query($con,$busqueda);
$arra=recorrer($resultado2);

/* var_dump($arra[0]['id_usuario']); */
$aux=$arra[0]['id_usuario'];

$consulta="INSERT INTO mascotas values (NULL,'$aux','$nmascota','$edad','$tipo','$sexo','$descripcion',NOW())";
$resultado=mysqli_query($con,$consulta);
$aux=0;
//$resultado=mysqli_query($con,$consulta);
if ( $resultado || $resultado1) {
	echo "Registro completado exitosamente";
}else{
	echo "Revise los datos ingresados";
}
}
?>