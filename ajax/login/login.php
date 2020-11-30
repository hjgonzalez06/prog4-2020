<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión | Programación IV</title>
    <link rel="shortcut icon" href="../assets/logos/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/login-style.css">
</head>
<body>

    <header class="row">
        <figure id="logo" class="col-6">
            <img src="../assets/logos/logo.svg" alt="Logo P4">
            <figcaption>Programación IV</figcaption>
        </figure>
        <nav id="navbar" class="col-6">
            <ul id="navbar-list">
                <li class="list-item"><a href="#">Crear cuenta</a></li>
            </ul>
        </nav>
    </header>

    <main class="row">
        <form id="login" class="col-3" action="redirect.php" method="post" autocomplet="off">
            <p><label >Nombre de Usuario</label></p>
            <input class="User" type="text" id="usuario" name="usuario" placeholder="Introduzca su usuario" autofocus="" required=""></p>
            <p><label>Contraseña</label></p>
            <input class="Pass" type="password" id="contrasenia" name="pass" placeholder="Introduzca su contraseña" required=""></p>
            <input type="submit" id="submit" name="submit" value="Ingresar" class="boton">
        </form>
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