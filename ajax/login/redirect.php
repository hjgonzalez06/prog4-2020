<?php

    require_once('../config/check.php');

    $verificar = new check();

    session_start();

    if($verificar->login()){

        $_SESSION['usuario'] = $verificar->getUsuario();
        $_SESSION['account_id'] = $verificar->getAccountId();
        $_SESSION['role'] = $verificar->getRole();
        
        switch($_SESSION['role']){

            case 1:
                header('location: ../regular/home/home.php');
                break;

            case 0:
                header('location: ../home/home.php');
                break;

        }

    }else{

        $_SESSION['error'] = true;

        header('location: login.php');

    }