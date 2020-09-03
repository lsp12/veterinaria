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

function eliminar($cd){
    global $con;
    $consulta="DELETE FROM `clientes` WHERE `clientes`.`id_usuario` = $cd";
    $ejecucion=mysqli_query($con,$consulta);
}
function eliminarMascota($cd){
    global $con;
    $consulta="DELETE FROM `mascotas` WHERE `mascotas`.`id_usuario` = $cd";
    $ejecucion=mysqli_query($con,$consulta);
}

function actualizarCliente($id,$nombre,$apellido,$direccion,$correo,$cedula){
    
    global $con;
    $consulta="UPDATE `clientes` SET `nombre` = '$nombre', `apellido` = '$apellido', `direccion` = '$direccion', `correo electronico` = '$correo', `cedula` = '$cedula', `fecha_registro` = NOW() WHERE `clientes`.`id_usuario` = $id";
    $ejecucion=mysqli_query($con,$consulta);
    if($ejecucion){
        echo "Registro completado exitosamente";
    }else{
        echo "Error";
    }
    header("location: registro.php");
}

function actualizarMascota($nmascota, $edad, $tipo, $sexo, $descripcion, $id){
    global $con;
    $consulta="UPDATE `mascotas` SET `nombreM` = '$nmascota', `edad` = '$edad', `tipoAnimal` = '$tipo', `sexo_mascota` = '$sexo', `problema` = '$descripcion' WHERE `mascotas`.`id` = $id";
    $ejecucion=mysqli_query($con,$consulta);
    if($ejecucion){
        echo "Registro completado exitosamente";
    }else{
        echo "Error";
    }
    header("location: registro.php");
}
function insertarMascota($nmascota, $edad, $tipo, $sexo, $descripcion, $id){
    global $con;
    $consulta="INSERT INTO mascotas values (NULL,'$id','$nmascota','$edad','$tipo','$sexo','$descripcion',NOW())";
    $resultado=mysqli_query($con,$consulta);
    
}
?>