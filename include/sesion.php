<?php 

    class Sesion{
        
        public function __construct(){
            session_start();
        }
    
        public function darUsuario($user){
            $_SESSION['usuario'] = $user;
        }
    
        public function dameUsuario(){
            return $_SESSION['usuario'];
        }
    
        public function cerrarSesion(){
            session_unset();
            session_destroy();
        }
    }

?>