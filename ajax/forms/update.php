<?php

    session_start();

    if (!isset($_SESSION['usuario']) || !isset($_SESSION['account_id'])) {

        header ('location: ../login/login.php');

    }else if($_SESSION['role'] != 0){

        header ('location: ../logout/logout.php');

    }

    require_once('../config/gestion.php');

    $consulta = new gestion();

    $usuario = $consulta->obtenerUsuario($_GET['id']);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar usuario | Programación IV</title>
    <link rel="shortcut icon" href="../assets/logos/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/update-style.css">
</head>
<body>

    <main>

        <h1 id="main-title" class="col-6">Actualización de usuario</h1>

        <form id="update" action="" method="post" autocomplete="off" role="form">
            <input type="text" name="id" value="<?php echo $usuario['account_id']; ?>" hidden="true">
            <div class="form-group">
                <input type="text" name="user" value="<?php echo $usuario['username']; ?>">
                <input type="text" name="fullname" value="<?php echo $usuario['fullname']; ?>">
                <input type="email" name="email" value="<?php echo $usuario['email']; ?>">
            </div>
            <div class="form-group">
                <input type="text" name="address" value="<?php echo $usuario['address']; ?>">
                <select name="pass" class="form-control">
                    <option value="">Restablecer contraseña</option>
                    <option value="user1234">Default</option>
                </select>
                <select name="role" class="form-control">
                    <?php
                        switch($usuario['role']){
                            case 0:
                                echo "<option value='0'>Administrador</option>";
                                echo "<option value='1'>Regular</option>";
                                break;

                            case 1:
                                echo "<option value='1'>Regular</option>";
                                echo "<option value='0'>Administrador</option>";
                                break;
                        }
                    ?>
                </select>
            </div>
            <div class="opciones">
                <input type="submit" id="btn-update" name="submit" value="Actualizar">
                <button type="button" id="btn-home" name="submit">Regresar</button>
            </div>
        </form>
    </main>
    
</body>
</html>