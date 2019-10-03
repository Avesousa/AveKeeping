<?php

    class Conexion{

        private $host;
        private $base;
        private $usuario;
        private $clave;
        private $caracter;

        public function __construct(){
            $this->host = 'localhost';
            $this->base = 'educacion';
            $this->usuario = 'root';
            $this->clave = '26390042';
            $this->caracter = 'utf8';
        }

        function conectar(){
            try {
                $conexion = "mysql:host=" . $this->host . ";dbname=" . $this->base . ";charset=" . $this->caracter;
                $options = [
                    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES   => false,
                ];
                $final = new PDO($conexion, $this->usuario, $this->clave, $options);
        
                return $final;
            } catch (\PDOException $e) {
                print_r('Error de conexión: ' . $e->getMessage());
            }
        }

    }

?>