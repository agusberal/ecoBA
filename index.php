<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include("Controller/conexion.php"); 
        include("Model/login.php");
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <link rel="stylesheet" href="Views/style/style.css">
    <title>Login</title>
=======
    <title>ecoba</title>
    <link rel="stylesheet" href="Views/css/style.css">

>>>>>>> d411450d0ba9d4ff79794ca2349cd798dd200346
</head>
<body>
   <header>
        <img src="Views/img/ecobalogo.jpeg" class="logo" alt="" srcset="">
   </header>
    <main>
<<<<<<< HEAD
      
        <div class="inicio">
        <form action="Model/login.php" method="post" class="init">
            <h1>LOGIN</h1>
=======
        <form action="Model/login.php" method="post" class="inicio">
            <h1>Iniciar Sesión</h1>
>>>>>>> d411450d0ba9d4ff79794ca2349cd798dd200346
            <input type="text" name="usuario" placeholder="Ingresar usuario">
            <input type="password" name="contraseña" placeholder="Ingresar contraseña">
            <input type="submit" value="Ingresar" name="ingresar" class="btn">
            <p>¿No Tienes Cuenta?<a href="Views/pages/crearC.php" id="linkregis">!Registrate¡</a></p>
      
        </form>
        </div>
       
    </main>
    <footer>

    </footer>
</body>
</html>