<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>    
        <?php
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);

            include __DIR__ . '/Controller/conexion.php';
            include __DIR__ . '/Model/login.php';
        ?>
        
        <form action="" method="post" class="inicio">
            <h1>LOGIN</h1>
            <input type="text" name="usuario" placeholder="Ingresar usuario" required="">
            <input type="password" name="contraseña" placeholder="Ingresar contraseña"required="">
            <input type="submit" value="Ingresar" name="ingresar">
            <p>¿No Tienes Cuenta?<a href="Views/pages/crearC.php">!Registrate¡</a></p>
      
        </for>
    </main>

</body>
</html>