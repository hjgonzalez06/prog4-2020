<?php

    require_once('conexion.php');

    class check extends conexion {

        protected $usuario;
        protected $contraseña;

        public function __construct(){

            parent::__construct();

            $this->usuario = htmlentities(addslashes(filter_input(INPUT_POST, "usuario")));
            $this->contraseña = htmlentities(addslashes(filter_input(INPUT_POST, "pass")));

        }

        public function comprobarUsuario(){

            $query = "SELECT * FROM users WHERE username = :username";

            $resultado = $this->conexionDB->prepare($query);

            $resultado->execute(array(":username"=>$this->usuario));

            return $resultado->rowCount();

        }

        public function comprobarContraseña(){

            $query = "SELECT * FROM users WHERE username = :username";

            $resultado = $this->conexionDB->prepare($query);

            $resultado->execute(array(":username"=>$this->usuario));

            $password = $resultado->fetch();

            return password_verify($this->contraseña,$password['pass']);

        }

        public function login(){

            return ($this->comprobarUsuario() != 0 && $this->comprobarContraseña());

        }

        public function getUsuario(){

            return $this->usuario;

        }

        public function getAccountId(){

            $query = "SELECT * FROM users WHERE username = :username";

            $resultado = $this->conexionDB->prepare($query);

            $resultado->execute(array(":username"=>$this->usuario));

            $user = $resultado->fetch();

            return $user['account_id'];

        }

        public function getRole(){

            $query = "SELECT * FROM users WHERE username = :username";

            $resultado = $this->conexionDB->prepare($query);

            $resultado->execute(array(":username"=>$this->usuario));

            $user = $resultado->fetch();

            return $user['role'];

        }

        public function contraseñasIguales($pass,$confirmPass){

            return $pass == $confirmPass;

        }

    }