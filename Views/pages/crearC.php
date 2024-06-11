<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOLA</title>
</head>
<body>
    
    <header>
        
    </header>
    <main>
        <div class="volver">
            <a href="../../index.php" class="atras">Atras</a>
        </div>
        <div class="iniciose1">
            <form action="" method="post" class="forms">
                <?php
                include "../../Controller/conexion.php";
                include "../../Model/registrar.php";
                ?>
            
                <div class="registro">
                    <h2 class="contact">¡Registrate¡</h2>

                    <div class="sector">
                        <div class="in">
                            <input type="text" class="form-control" name="usuario" id="" placeholder="Ingrese usuario">
                        </div>
                        <div class="in">
                            <input type="text" class="form-control" name="contraseña" id="" placeholder="Ingrese contraseña">
                        </div>
                            <div class="in">
                             <input type="text" class="form-control" name="nombre" id="" placeholder="Ingrese nombre">
                        </div>
                    
                        <div class="in">
                            <input type="text" class="form-control" name="apellido" id="" placeholder="Ingrese apellido">
                        </div>
                        <div class="in">
                            <input type="text" class="form-control" name="email" id="" placeholder="Ingrese email">
                        </div>
                        <div class="in">
                            <input type="number" class="form-control" name="dni" id="" placeholder="Ingrese dni">
                        </div>
                        <div class="in">
                            <input type="number" class="form-control" name="edad" id="" placeholder="Ingrese edad">
                        </div>
                       
                    </div>    
                    <input type="submit" value="Registrar" name="registrarr" class="btn1">
                           
                </div>
                
            </form>
        </div>
    </main>
</body>
</html>