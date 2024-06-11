<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include("Controller/conexion.php");
        include("Model/login.php");
        
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
   
    <main>
        <form action="Model/login.php" method="post" class="inicio">
            <h1>LOGIN</h1>
            <input type="text" name="usuario" placeholder="Ingresar usuario">
            <input type="password" name="contraseña" placeholder="Ingresar contraseña">
            <input type="submit" value="Ingresar" name="ingresar">
            <p>¿No Tienes Cuenta?<a href="Views/pages/crearC.php">!Registrate¡</a></p>
      
        </form>
    </main>
</body>
</html>