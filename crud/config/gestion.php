<?php

    require_once('conexion.php');

    class gestion{

        protected $baseDatos;

        public function __construct(){

            $conexion = new conexion();
            
            $this->baseDatos = $conexion->__conexion();

        }

        public function crearUsuario($usuario,$contraseña,$nombre,$correo,$direccion){

            $query = "INSERT INTO users (username,pass,fullname,email,address)
                      VALUES (:username,:pass,:fullname,:email,:address)";

            $resultado = $this->baseDatos->prepare($query);

            $resultado->execute(array(":username"=>$usuario,":pass"=>$contraseña,":fullname"=>$nombre,
                                      ":email"=>$correo,":address"=>$direccion));

            return header('location: ../home/home.php?success=true');

        }

        public function visualizarUsuarios(){

            $query = "SELECT * FROM users";

            $resultado = $this->baseDatos->prepare($query);

            $resultado->execute();

            return $resultado->fetchAll();

        } 

        public function obtenerUsuario($id){

            

        }

        public function actualizarUsuario(){

            

        }

        public function eliminarUsuario(){

           

        }

        public function limpiar($input){

            return htmlentities(addslashes($input));

        }

    }