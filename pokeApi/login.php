<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
         <meta name="description" content="" />
        <meta name="author" content="" /> 
        <title>Login</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        
        
         <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
               
</head>
<body>
    <header class="container-fluid bg-info py-2">
        <div class="fw-normal container text-center">
            <h1>Iniciar sesion</h1>
        </div>
    </header>

    <div class="container-fluid my-2">
        <form action="comprobar_datos.php" method="POST">
            <div class="text-center">
                <img class="" src="https://www.coordinadora.com/wp-content/uploads/login.png" alt="Imagen de login" width="300" height="300">
            </div>
            
            <div class="mb-3 row mx-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="correo" class="form-control" id="inputEmail" placeholder="Ingrese su email" require>
                </div>
            </div>
            <div class="mb-3 row mx-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="contra" class="form-control" id="inputPassword" placeholder="Ingrese su contraseña" require>
                </div>
            </div>

            <div class="text-center">
                <button class="btn btn-lg btn-info" type="submit">Ingresar</button>
                <a href="registro.html" class="btn btn-lg btn-info" type="submit">Registrarse</a>
            </div>
        </form>
    </div>

    <footer class="text-center bg-info py-4">
        <div class=" text-muted">
            <p>&copy; Edwar Cordoba</p>
        </div>
    </footer>
    </body>
</html>

