<?php

    session_start();

    if (!isset($_SESSION['usuario']) || !isset($_SESSION['account_id'])) {

        header ('location: ../login/login.php');

    }else if($_SESSION['role'] != 0){

        header ('location: ../logout/logout.php');

    }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse | Programación IV</title>
    <link rel="shortcut icon" href="../assets/logos/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/update-style.css">
</head>
<body>

    <main>

        <h1 id="main-title" class="col-6">Registro de Usuario</h1>

        <form id="createForm" action="" method="post" autocomplete="off" role="form">
            <div class="form-group">
                <input type="text" name="fullname" placeholder="Introduzca su nombre y apellido">
                <input type="email" name="email" placeholder="Introduzca su correo electrónico">
                <input type="text" name="address" placeholder="Introduzca su dirección">
            </div>
            <div class="form-group">
                <input type="text" name="user" placeholder="Introduzca un nombre de usuario">
                <select name="role" class="form-control">
                    <option value="1">Regular</option>
                    <option value="0">Administrador</option>
                </select>
                <input type="password" name="pass" placeholder="Introduzca su contraseña">
                <input type="password" name="confirmPass" placeholder="Introduzca nuevamente la contraseña">
            </div>
            <input id="btn-create" type="submit" name="submit" value="Guardar">
        </form>
    </main>
   
</body>
</html>