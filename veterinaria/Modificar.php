<?php 
ob_start();
include_once("conexion.php");
require_once("ingreso.php");
$id=$_GET['id'];
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
        <a class="navbar-brand" href="#">modificar o eliminar Mascota</a>
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
            <li class="nav-item active">
                <a class="nav-link" href="ingresoM.php">modificar Mascota</a>
            </li>
            <li class="nav-item ">
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
                
                            <form action="#" method="POST">
                                
                                <div>
                                    <div class="form-row justify-content-center">
                                <h2>Modificar Mascota</h2>
                            </div>
                            

                            <div class="form-row">
                            <div class="form-group col-6">
                                    <label for="NombreM">Nombre</label>
                                    <input type="text" requiredname="Cedula" id="" name="nmascota"class="form-control">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="NombreM">Edad</label>
                                    <input type="text"required id="" class="form-control" name="emascota">
                                </div>
                            <div class="form-group col-md-6">
                                <label for="inputState">Tipo de Animal</label>
                                <select id="inputState" required name="tipo"class="form-control">
                                <option value=""selected>Selecione...</option>
                                <option value="Perro">Perro</option>
                                <option value="Gato">Gato</option>
                                <option value="Hamster">Hamster</option>
                                <option value="Pajaro">Pajaro</option>
                                <option value="Pez">Pez</option>
                                <option value="Otro">Otro</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputState">Sexo de la mascota</label>
                                <select id="inputState"required name="sexo"class="form-control">
                                <option selected>Elegir</option>
                                <option value="Hembra">Hembra</option>
                                <option value="Macho">Macho</option>
                                </select>
                            </div>

                            </div>

                            <div class="form-group">
                                <label for="descripcion"><h3>Descripcion de problema de la mascota</h3></label>
                                <textarea class="form-control" name="descripcion"id="exampleFormControlTextarea1" rows="5"></textarea>
                            </div>
                            <div class="form-group p-3">
                            <button type="submit" name="boton3"class="btn btn-primary">actualizar</button>
                            
                            </div>
                            <?php
                                if(isset($_POST['boton3'])){
                                    $nmascota=strtoupper($_POST['nmascota']);
                                    $edad=$_POST['emascota'];
                                    $tipo=strtoupper($_POST['tipo']);
                                    $sexo=strtoupper($_POST['sexo']);
                                    $descripcion=strtoupper($_POST['descripcion']);
                                    
                                    actualizarMascota($nmascota, $edad, $tipo, $sexo, $descripcion, $id);
                                }
                                
                            ?>
                            </div>
                        </form> 
                       
                        
                        
                    
                </div>

            </div>
            

        </div>
    </div>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
</body>
</html>
<?php
ob_end_flush();
?>