<?php

    require_once('../config/gestion.php');
    require_once('../config/check.php');

    $consulta = new gestion();

    session_start();

    if($_GET['create']){

        if(isset($_POST['user']) && isset($_POST['fullname']) && isset($_POST['email']) &&
            isset($_POST['address']) && isset($_POST['pass']) && isset($_POST['confirmPass'])
                && isset($_POST['role'])){

            if($_POST['user']!="" && $_POST['fullname']!="" && $_POST['email']!="" &&
                $_POST['address']!="" && $_POST['pass']!="" && $_POST['confirmPass']!=""
                    && $_POST['role']!=""){

                $usuario = $consulta->limpiar($_POST['user']);
                $contraseña = $consulta->limpiar($_POST['pass']);
                $contraseña2 = $consulta->limpiar($_POST['confirmPass']);
                $nombre = $consulta->limpiar($_POST['fullname']);
                $correo = $consulta->limpiar($_POST['email']);
                $direccion = $consulta->limpiar($_POST['address']);
                $nivel = $consulta->limpiar($_POST['role']);

                $verificar = new check();

                if($verificar->contraseñasIguales($contraseña,$contraseña2)){

                    $contraseña = password_hash($contraseña,PASSWORD_DEFAULT);

                    $consulta->crearUsuario($usuario,$contraseña,$nombre,$correo,$direccion,$nivel);

                }else{

                    header('location: ../forms/create.php?iguales=false');

                }

            }else{

                header('location: ../forms/create.php?incomplete=true');

            }

        }else{

            header('location: ../forms/create.php?incomplete=true');

        }

    } else if ($_GET['update']) {

        if(isset($_POST['id']) && isset($_POST['user']) && isset($_POST['fullname']) && isset($_POST['email']) &&
            isset($_POST['address']) && isset($_POST['pass']) && isset($_POST['role'])){

            if($_POST['id']!="" && $_POST['user']!="" && $_POST['fullname']!="" && $_POST['email']!="" &&
                $_POST['address']!="" && $_POST['pass']!="" && $_POST['role']!=""){

                $id = $consulta->limpiar($_POST['id']);
                $usuario = $consulta->limpiar($_POST['user']);
                $contraseña = password_hash($consulta->limpiar($_POST['pass']),PASSWORD_DEFAULT);
                $nombre = $consulta->limpiar($_POST['fullname']);
                $correo = $consulta->limpiar($_POST['email']);
                $direccion = $consulta->limpiar($_POST['address']);
                $nivel = $consulta->limpiar($_POST['role']);

                $consulta->actualizarUsuario($id,$usuario,$contraseña,$nombre,$correo,$direccion,$nivel);

            }else{

                header('location: ../forms/update.php?id='.$_POST['id'].'&incomplete=true');

            }

        }else{

            header('location: ../forms/update.php?id='.$_POST['id'].'&incomplete=true');

        }

    } else if ($_GET['delete']) {

        $consulta->eliminarUsuario($_GET['id']);

    } else {

        return header('location: ../home/home.php');

    }