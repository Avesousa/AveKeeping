<?php

    include_once 'include/usuario.php';
    include_once 'include/sesion.php';

    $sesion = new Sesion();
    $usuario = new Usuario();

    if(isset($_SESSION['usuario'])){
        echo "Hay sesión";

    }else if(isset($_POST['usuario']) && isset($_POST['clave'])){
        $user = $_POST['usuario'];
        $pass = $_POST['clave'];

        if($usuario->iniciar($user,$pass)){
            $sesion->darUsuario($user);
            $usuario->darUsuario($user);
            include_once 'vista/home.php';
        }else{
            $errorLogin = "Error de usuario";
            include_once 'vista/login.php';
        }
    }else{
        include_once 'vista/login.php';
    }

?>