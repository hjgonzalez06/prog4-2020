<?php

    require_once('conexion.php');

    class gestion{

        protected $baseDatos;

        public function __construct(){

            $conexion = new conexion();
            
            $this->baseDatos = $conexion->__conexion();

        }

        public function crearUsuario($usuario,$contraseña,$nombre,$correo,$direccion,$nivel){

            $query = "INSERT INTO users (username,pass,fullname,email,address,role)
                      VALUES (:username,:pass,:fullname,:email,:address,:role)";

            $resultado = $this->baseDatos->prepare($query);

            $resultado->execute(array(":username"=>$usuario,":pass"=>$contraseña,":fullname"=>$nombre,
                                      ":email"=>$correo,":address"=>$direccion,":role"=>$nivel));

            return header('location: ../home/home.php?success=true');

        }

        public function visualizarUsuarios(){

            $query = "SELECT * FROM users";

            $resultado = $this->baseDatos->prepare($query);

            $resultado->execute();

            return $resultado->fetchAll();

        } 

        public function obtenerUsuario($id){

            $query = "SELECT * FROM users WHERE account_id = :account_id";

            $resultado = $this->baseDatos->prepare($query);

            $resultado->execute(array(":account_id"=>$id));

            return $resultado->fetch();

        }

        public function actualizarUsuario($id,$usuario,$contraseña,$nombre,$correo,$direccion,$nivel){

            $query = "UPDATE users SET username = :username, pass = :pass, fullname = :fullname,
                      email = :email, address = :address, role = :role WHERE account_id = :account_id";

            $resultado = $this->baseDatos->prepare($query);

            $resultado->execute(array(":username"=>$usuario,":pass"=>$contraseña,":fullname"=>$nombre,
                                      ":email"=>$correo,":address"=>$direccion,":role"=>$nivel,
                                      ":account_id"=>$id));

            return header('location: ../home/home.php?success=true');

        }

        public function eliminarUsuario($id){

            $query = "DELETE FROM users WHERE account_id = :account_id";

            $resultado = $this->baseDatos->prepare($query);

            $resultado->execute(array(":account_id"=>$id));

            return header('location: ../home/home.php?success=true');

        }

        public function limpiar($input){

            return htmlentities(addslashes($input));

        }

    }