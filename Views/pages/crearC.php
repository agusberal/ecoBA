<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ecoBA</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>    
    <header>
        <img src="../img/ecobalogo.jpeg" class="logo" alt="" srcset="">
    </header>
    <main>
        <div class="volver">
            <a href="../../index.php" class="atras">Atras</a>
        </div>
        <div class="regis">
            <form action="" method="post" class="forms">
                <?php
                include "../../Controller/conexion.php";
                include "../../Model/registrar.php";
                ?>
                <h1>Registrate</h1>
                    <input type="text" class="form-control" name="usuario" id="" placeholder="Ingrese usuario">
                    <input type="text" class="form-control" name="contraseña" id="" placeholder="Ingrese contraseña">
                    <input type="text" class="form-control" name="nombre" id="" placeholder="Ingrese nombre">
                    <input type="text" class="form-control" name="apellido" id="" placeholder="Ingrese apellido">
                    <input type="text" class="form-control" name="email" id="" placeholder="Ingrese email">                    
                    <input type="number" class="form-control" name="dni" id="" placeholder="Ingrese dni">
                    <input type="number" class="form-control" name="edad" id="" placeholder="Ingrese edad"> 
                    <input type="submit" value="Registrar" name="registrarr" class="btn">
            </form>
        </div>
    </main>
    <footer>
        
    </footer>
</body>
</html>