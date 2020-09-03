<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iniciar sesion</title>
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
<body>
    <div class="fondo">
        <div class="d-flex flex-row-reverse">
            <div style="background-color: rgba(218, 210, 201, 0.808);" class="p-3 m-5 text-white rounded">
                <form action="validar.php" method="POST">
                    <fieldset><h2>Inicio de usuario</h2></fieldset>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Correo electronico</label>
                    <input type="email" class="form-control" name="usuario" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="password" class="form-control" name="contra" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>