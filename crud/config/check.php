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

            

        }

        public function comprobarContraseña(){

            

        }

        public function login(){

            

        }

        public function getUsuario(){

            

        }

        public function getAccountId(){

            

        }

        public function contraseñasIguales($pass,$confirmPass){

            return $pass == $confirmPass;

        }

    }