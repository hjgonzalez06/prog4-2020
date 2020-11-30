<?php

    class conexion {

        protected $conexionDB;

        public function __construct(){

            try {

                $this->conexionDB = new PDO("mysql:host=localhost;dbname=prog4","root","");

            } catch(Exception $e) {

                echo "No se ha podido conectar a la base de datos. "
                    . "ERROR" + $e->getMessage();

            }
            
        }

        public function __destruct(){

            $this->conexionDB = NULL;

        }

        public function __conexion(){

            return $this->conexionDB;

        }

    }