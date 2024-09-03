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
        <img src="Views/img/ecobalogo.jpeg" class="logo" alt="" srcset="">
   </header>
    <main>
        <form action="Model/login.php" method="post" class="inicio">
            <h1>Iniciar Sesión</h1>
            <input type="text" name="usuario" placeholder="Ingresar usuario">
            <input type="password" name="contraseña" placeholder="Ingresar contraseña">
            <input type="submit" value="Ingresar" name="ingresar" class="btn">
            <p>¿No Tienes Cuenta?<a href="Views/pages/crearC.php" id="linkregis">!Registrate¡</a></p>
      
        </form>
    </main>
    <footer>

    </footer>
</body>
</html>