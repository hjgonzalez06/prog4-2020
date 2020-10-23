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

    <header class="row">
        <figure id="logo" class="col-6">
            <img src="../assets/logos/logo.svg" alt="Logo P4">
            <figcaption>Programación IV</figcaption>
        </figure>
        <nav id="navbar" class="col-6">
            <ul id="navbar-list">
                <li class="list-item"><a href="../home/home.php">Inicio</a></li>
                <li class="list-item"><a href="../logout/logout.php">Salir</a></li>
            </ul>
        </nav>
    </header>

    <main>

        <h1 id="main-title" class="col-6">Actualización de usuario</h1>

        <form id="update" action="" method="" autocomplete="off" role="form">
            <input type="text" name="id" value="" hidden="true">
            <div class="form-group">
                <input type="text" name="user" value="">
                <input type="text" name="fullname" value="">
                <input type="email" name="email" value="">
            </div>
            <div class="form-group">
                <input type="text" name="address" value="">
                <select name="pass" class="form-control">
                    <option value="">Restablecer contraseña</option>
                    <option value="user1234">Default</option>
                </select>
            </div>
            <input type="submit" name="submit" value="Actualizar">
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