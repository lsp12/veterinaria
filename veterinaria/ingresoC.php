<?php 
ob_start();
include_once("conexion.php");
require_once("ingreso.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso de nueva mascota</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        .fondo{
            background-image: url("img/fondo.jpg");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            height: 100vh;
            min-height: 60rem;
        }
    </style>
</head>
<body class="fondo">
    <div>
    <nav class="navbar navbar-dark bg-dark">
        <!-- Navbar content -->
        <a class="navbar-brand" href="#">modificar o eliminar cliente</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="registro.php">Registrar mascota</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ingresar_mascota.php">Buscar afliliado</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ingresoM.php">modificar Mascota</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="ingresoC.php">modificar o eliminar cliente</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Salir</a>
            </li>
            </ul>

        </div>
    </nav>
    </div>
    
    <div class="">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="m-5 p-3 text-white rounded col-6" style="background-color: rgba(218, 210, 201, 0.808);">
                    <form method="post">
                        <div class="form-row justify-content-center">
                            <h2>Buscar afiliado</h2>
                        </div>
                        <div class="form-group">
                            <label for="NumeroCD">Numero de cedula</label>
                            <input type="text" class="form-control" name="ced" id="NumeroCD" required >
                            <div class="form-group"> 
                            <button type="submit" class="btn btn-primary" name="btn1">eliminar cliente</button>
                            <button type="submit" class="btn btn-primary" name="btn2">buscar cliente</button>
                            
                        </div>
                    </form>
                            <?php
                        $array;
                        if (isset($_POST['btn2'])) {
                            $ced=$_POST['ced'];
                            $array=buscar($ced);
                            /* var_dump($array); */
                            ?><input class="form-control" type="text" placeholder="<?php echo ($array[0]['nombre']); ?>" readonly>
                            <?php }
                            if(isset($_POST['btn1'])){
                                $ced=$_POST['ced'];
                                eliminarCliente($ced);
                            }
                            ?>
                        
                        <form method="POST">
                            
                                </div>
                                <div class="form-row justify-content-center">

                                <h2>Modificar cliente por cedula</h2>
                            </div>
                            
                            <div class="form-row ">
                            <div class="form-group col-md-6">
                            <label for="inputAddress">Numero de cedula</label>
                            <input type="text" class="form-control" id="inputAddress" name="cedula" placeholder="Ingrese su cedula"required>
                            </div>

                            


                            <div class="form-group col-md-6">
                                <label for="Edad">Apellidos</label>
                                <input type="text" class="form-control" id="Edad" name="apellido" placeholder="Ingrese sus Apellidos"required>
                            </div>
                            </div>
                            <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Nombres</label>
                                <input type="text" class="form-control" name="nombre" id="inputEmail4"placeholder="Ingrese sus Nombres" required>
                            </div>


                            <div class="form-group col-md-6">
                                <label for="inputAddress">Correo electronico</label>
                                <input type="email" class="form-control" id="inputAddress" name="correo"placeholder="Ingrese su correo electronico">
                            </div>
                            </div>
                            <div class="form-group">
                            <label for="inputAddress2">Direccion</label>
                            <input type="text" required class="form-control" id="inputAddress2" name="direccion" placeholder="Ingrese la Direccion">
                            <button type="submit" name="boton"class="btn btn-primary">actualizar</button>
                            
                            <?php
                            if(isset($_POST['boton'])){
                                $nombre=strtoupper($_POST['nombre']);
                                $apellido=strtoupper($_POST['apellido']);
                                $cedula=$_POST['cedula'];
                                $correo=$_POST['correo'];
                                if ($correo=="") {$correo="NINGUNO";}
                                $direccion=strtoupper($_POST['direccion']);
                                echo "<script>alert ('jonathan')</script>";
                                actualizarCliente($nombre,$apellido,$direccion,$correo,$cedula);
                                
                            }
                        
                            ?>
                            </div>
                            </form>
            </div>
        </div>
    </div>
<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
    
</body>
<?php
ob_end_flush();
?>