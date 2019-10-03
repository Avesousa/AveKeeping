<?php

    include_once 'conexion.php';

    class Usuario extends Conexion{

        private $nombre;
        private $username;

        public function iniciar($usuario,$clave){
            
            $sql = $this->conectar()->prepare('SELECT * FROM usuario WHERE usuario = :user AND clave = :pass');
            $sql->execute(['user' => $usuario, 'pass' => $clave]);
            if($sql->rowCount()){
                return true;
            }else{
                return false;
            }
        }

        public function darUsuario($usuario){
            $sql = $this->conectar()->prepare('SELECT * FROM usuario WHERE usuario = :user');
            $sql->execute(['user' => $usuario]);
            foreach($query as $elemento){
                $this->nombre = $elemento['asociado'];
                $this->username = $elemento['usuario'];
            }
        }


        public function dameNombre(){
            return $nombre;
        }

    }

?>