<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOBA</title>
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>
    <header>
        <img src="../img/ECOBA.png" class="logo" alt="" srcset="">
        <a href="ingresar.php#" class="ingresar-btn">Atras</a>
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
                        <form action="" method="" class="">
                            <?php
                            include "../../Controller/conexion.php";
                            include "../../Model/registrar.php";
                            ?>
                            <div class="input-group">
                                <label>Usuario</label>
                                <input id="" type="text" name="usuario" placeholder="Ingrese nombre de usuario" required>
                            </div>
                            <div class="input-group">
                                <label>Contraseña</label>
                                <input type="text" id="" name="contraseña" placeholder="Ingresa tu contraseña" required>
                            </div>
                            <div class="input-group">
                                <label>Nombre</label>
                                <input type="text" id="" name="nombre" placeholder="Ingresa tu nombre" required>
                            </div>
                            <div class="input-group">
                                <label>Apellido</label>
                                <input type="text" id="" name="apellido" placeholder="Ingresa tu apellido" required>
                            </div>
                            <div class="input-group">
                                <label>Documento</label>
                                <input type="number" id="" name="dni" placeholder="Ingresa tu numero de DNI" required>
                            </div>
                            <div class="input-group">
                                <label>Edad</label>
                                <input type="number" id="" name="edad" placeholder="Ingresa tu edad" required>
                            </div>
                            <button type="submit" value="Registrar" name="registrarr" class="login-btn">Registrar</button>

                            <p class="link">¿Ya Tenes Cuenta?<a href="../pages/ingresar.php#">!Inicia Sesión¡</a></p>
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