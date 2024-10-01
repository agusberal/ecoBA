<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include("Controller/conexion.php");
    include("Model/login.php");
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ecoba</title>
    <link rel="stylesheet" href="Views/css/style.css">


</head>

<body>
    <header>
        <div class="logo">
            <img src="Views/img/ECOBA.png" class="logo" alt="" srcset="">
        </div>
        <a href="Views/pages/ingresar.php#" class="ingresar-btn">Ingresar</a>
    </header>
    <main>

        <form action="Model/login.php" method="post" class="inicio">
            <h1>Iniciar Sesión</h1>

            <input type="text" name="usuario" placeholder="Ingresar usuario">
            <input type="password" name="contraseña" placeholder="Ingresar contraseña">
            <input type="submit" value="Ingresar" name="ingresar" class="btn">
            <p>¿No Tienes Cuenta?<a href="Views/pages/crearC.php" id="linkregis">!Registrate¡</a></p>
      
        </form>
        </div>
       
    </main>
    <footer>
        <p>&copy; 2023 ECOBA. Todos los derechos reservados.</p>
    </footer>
</body>

</html>