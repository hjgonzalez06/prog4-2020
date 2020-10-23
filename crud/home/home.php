<?php

    require_once('../config/gestion.php');

    $consulta = new gestion();

    $usuarios = $consulta->visualizarUsuarios();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD | Programación IV</title>
    <link rel="shortcut icon" href="../assets/logos/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/home-style.css">
</head>
<body>

    <header class="row">
        <figure id="logo" class="col-6">
            <img src="../assets/logos/logo.svg" alt="Logo P4">
            <figcaption>Programación IV</figcaption>
        </figure>
        <nav id="navbar" class="col-6">
            <ul id="navbar-list">
                <li class="list-item"><a href="../home/home.php">Inicio</a></li>
                <li class="list-item"><a href="../forms/create.php">Crear usuario</a></li>
                <li class="list-item"><a href="../logout/logout.php">Salir</a></li>
            </ul>
        </nav>
    </header>

    <h3 id="welcome" class="row col-12">
        Bienvenido, <span>USUARIO</span>
    </h3>

    <main>
        <h1 id="main-title" class="col-6">Listado de usuarios registrados</h1>
        <table class="col-10">
            <thead>
                <tr>
                    <th class="info">Id Usuario</th>
                    <th class="info">Nombre y Apellido</th>
                    <th class="info">Usuario</th>
                    <th class="info">Correo Electrónico</th>
                    <th class="info">Dirección</th>
                    <th class="info" colspan="2">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($usuarios as $usuario){
                        echo "<tr>";
                            echo "<td>".$usuario['account_id']."</td>";
                            echo "<td>".$usuario['fullname']."</td>";
                            echo "<td>".$usuario['username']."</td>";
                            echo "<td>".$usuario['email']."</td>";
                            echo "<td>".$usuario['address']."</td>";
                            echo "<td class='warning'><a href='../forms/update.php?id="
                                  .$usuario['account_id']."'>Modificar</a></td>";
                            echo "<td class='danger'><a href='../actions/actions.php?delete=true&id="
                                  .$usuario['account_id']."'>Modificar</a></td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </main>

    <footer class="row col-12">
        <div id="copyright">
            <span class="footer-block">
                &copy; Copyright 2020 | Hiram J. González & Universidad de Margarita
                <br>
                Diseñado y desarrollado como material didáctico en Nueva Esparta, Venezuela.
            </span>
        </div>
    </footer>

</body>
</html>