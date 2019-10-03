<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AveKeeping - Administrador de web´s</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/inicio.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

</head>
<body class="text-center">
    
    <form class="form-signin" action="" method="POST">
        <img class="mb-4" src="img/logo-ak.png" alt="" width="120" height="120">
        <h1 class="h3 mb-3 font-weight-normal">Ingrese sus datos</h1>
        <?php
            if(isset($errorLogin)){
                echo $errorLogin;
            }
        ?>
        <label for="inputEmail" class="sr-only">Usuario</label>
        <input type="text" id="user" name="usuario" class="form-control" placeholder="Usuario" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="pass" name="clave" class="form-control" placeholder="Contraseña" required>
        <button class="btn btn-lg btn-color btn-block" type="submit">Iniciar Sesión</button><br>
        <p class="mt-5 mb-3 text-muted">&copy; Aplicación desarrollada por Avelino Figueira</p>
      </form>



      <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
</body>
</html>