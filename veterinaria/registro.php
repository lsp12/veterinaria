<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
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
    <nav class="navbar navbar-dark bg-dark">
        <!-- Navbar content -->
        <a class="navbar-brand" href="#">Registro de afiliado y mascota</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="registro.php">Registrar mascota</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ingresar_mascota.php">Buscar afliliado</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ingresoM.php">modificar Mascota</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ingresoC.php">modificar o eliminar cliente</a>
            </li>
             <li class="nav-item active">
                <a class="nav-link" href="index.php">Salir</a>
            </li>
            </ul>

        </div>
    </nav>
    <div class="">
        <div class="container ">
            <div class="p-3 m-5 text-white rounded" style="background-color: rgba(218, 210, 201, 0.808);">
                <form method="post" >
                    <div class="form-row justify-content-center">

                        <h2>Registro de Representante</h2>
                    </div>
                    <h1 class="alert alert-primary" role="alert"><center><?php include_once("registrar.php");?></center></h1>
                    <div class="form-row ">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Nombres</label>
                        <input type="text" class="form-control" name="nombre"id="inputEmail4"placeholder="Ingrese sus Nombres" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="Edad">Apellidos</label>
                        <input type="text" class="form-control" id="Edad" name="apellido"placeholder="Ingrese sus Apellidos"required>
                    </div>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputAddress">Numero de cedula</label>
                    <input type="text" class="form-control" id="inputAddress" name="cedula"placeholder="Ingrese su cedula"required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputAddress">Correo electronico</label>
                        <input type="email" class="form-control" id="inputAddress" name="correo"placeholder="Ingrese su correo electronico">
                    </div>
                    </div>
                    <div class="form-group">
                    <label for="inputAddress2">Direccion</label>
                    <input type="text" required class="form-control" id="inputAddress2" name="direccion"placeholder="Ingrese la Direccion">
                    </div>
                    <div class="form-row justify-content-center">
                        <h2>Registro de Mascota</h2>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="NombreM">Nombre</label>
                            <input type="text" requiredname="NombreM" id="" name="nmascota"class="form-control">
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

                    <button type="submit" name="boton"class="btn btn-primary">Registrar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
