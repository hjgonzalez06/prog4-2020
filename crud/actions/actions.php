<?php

    require_once('../config/gestion.php');
    require_once('../config/check.php');

    $consulta = new gestion();

    session_start();

    if($_GET['create']){

        if(isset($_POST['user']) && isset($_POST['fullname']) && isset($_POST['email']) &&
            isset($_POST['address']) && isset($_POST['pass']) && isset($_POST['confirmPass'])){

            if($_POST['user']!="" && $_POST['fullname']!="" && $_POST['email']!="" &&
                $_POST['address']!="" && $_POST['pass']!="" && $_POST['confirmPass']!=""){

                $usuario = $consulta->limpiar($_POST['user']);
                $contraseña = $consulta->limpiar($_POST['pass']);
                $contraseña2 = $consulta->limpiar($_POST['confirmPass']);
                $nombre = $consulta->limpiar($_POST['fullname']);
                $correo = $consulta->limpiar($_POST['email']);
                $direccion = $consulta->limpiar($_POST['address']);

                $verificar = new check();

                if($verificar->contraseñasIguales($contraseña,$contraseña2)){

                    $consulta->crearUsuario($usuario,$contraseña,$nombre,$correo,$direccion);

                }else{

                    header('location: ../forms/create.php?iguales=false');

                }

            }else{

                header('location: ../forms/create.php?incomplete=true');

            }

        }else{

            header('location: ../forms/create.php?incomplete=true');

        }

    }