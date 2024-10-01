<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include("../../Controller/conexion.php");
    include("../../Model/login.php");
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>ECOBA</title>
</head>

<body>
    <header>
        <img src="../img/ECOBA.png" class="logo" alt="" srcset="">
        <a href="../../index.php#" class="ingresar-btn">Atras</a>
    </header>
    <main>
        <div class="inii">
            <div class="login-container">
                <div class="login-left">
                    <div class="login-text">
                        <h2>Bienvenido a Ecoba</h2>
                        <p>Tu plataforma para reportar problemas ambientales y colaborar en la protección del medio ambiente. ¡Hagamos del mundo un lugar mejor!</p>
                    </div>
                </div>
                <div class="login-right">
                    <div class="login-form">
                        <form action="../../Model/login.php" method="post" class="inicio">
                            <div class="input-group">
                                <label for="email">Usuario</label>
                                <input id="email" type="text" name="usuario" placeholder="Ingresar usuario" required>
                            </div>
                            <div class="input-group">
                                <label for="password">Contraseña</label>
                                <input type="password" id="password" name="contraseña" placeholder="Ingresa tu contraseña" required>
                            </div>
                            <button type="submit" value="Ingresar" name="ingresar" class="login-btn">Ingresar</button>

                            <p class="link">¿No Tienes Cuenta?<a href="../pages/crearC.php#">!Registrate¡</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>

    </footer>
</body>

</html>