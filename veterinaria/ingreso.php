<?php
include_once("conexion.php");

function recorrer($query){
	$rows = [];
	while($row = $query->fetch_assoc()) {
		$rows[] = $row;
	}
	return $rows;
}
function buscar($ced){
    global $con;
    $cons="SELECT clientes.nombre, mascotas.nombreM, mascotas.tipoAnimal, clientes.id_usuario FROM clientes INNER JOIN mascotas ON clientes.id_usuario = mascotas.id_usuario WHERE clientes.cedula = '$ced'";
    $res=mysqli_query($con,$cons);
    return recorrer($res);
}

function eliminar($id){
    global $con;
    $consulta="DELETE FROM `clientes` WHERE `clientes`.`id_usuario` = $id";
    $ejecucion=mysqli_query($con,$consulta);
}
function eliminarMascota($cd){
    global $con;
    $consulta="DELETE FROM `mascotas` WHERE `mascotas`.`id` = $cd";
    $ejecucion=mysqli_query($con,$consulta);
    header("location: ingresar_mascota.php");
}
function eliminarCliente($ced){
    global $con;
    $aux=buscar($ced);
    $id=$aux[0]['id_usuario'];
    $consulta="DELETE FROM `clientes` WHERE `clientes`.`id_usuario` = $id";
    $ejecucion=mysqli_query($con,$consulta);
    if($ejecucion){
        header("location: ingresar_mascota.php");
    }else{
        echo "Error isern";
    }
}
function actualizarCliente($nombre,$apellido,$direccion,$correo,$cedula){
    $buscar=buscar($cedula);
    $id=$buscar[0]['id_usuario'];
    global $con;
    $consulta="UPDATE clientes SET nombre = '$nombre', apellido = '$apellido', direccion = '$direccion', correo_electronico = '$correo', cedula = $cedula, fecha_registro = NOW() WHERE clientes.id_usuario = $id";
    $ejecucion=mysqli_query($con,$consulta);
    if($ejecucion){
        header("location: ingresar_mascota.php"); 
    }else{
        echo "Error";
    }
    
}



function actualizarMascota($nmascota, $edad, $tipo, $sexo, $descripcion, $id){
    global $con;
    $consulta="UPDATE mascotas SET nombreM = '$nmascota', edad = $edad, tipoAnimal = '$tipo', sexo_mascota = '$sexo', problema = '$descripcion' WHERE mascotas.id = $id";
    $ejecucion=mysqli_query($con,$consulta);
    if($ejecucion){
        header("location: ingresar_mascota.php");         
    }else{
        echo "<script>alert 'el cliente no existe'</script>";
    }
    
}
function insertarMascota($nmascota, $edad, $tipo, $sexo, $descripcion, $cedulaClie){
    global $con;
    $aux=buscar($cedulaClie);
    echo var_dump($aux);
    $id=$aux[0]['id_usuario'];
    $consulta="INSERT INTO mascotas values (NULL,$id,'$nmascota',$edad,'$tipo','$sexo','$descripcion',NOW()) ";
    $resultado=mysqli_query($con,$consulta);
    if($resultado){
        echo "exitoso";
        header("location: ingresar_mascota.php");         
    }else{
        echo "fallido";
    }
    
}
?>