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
    <link rel="stylesheet" href="Views/style/style.css">
</head>
<body>
<header>
        <div class="logo">
            <img src="Views/img/ECOBA.png" class="logo" alt="" srcset="">
        </div>
        <a href="Views/pages/ingresar.php#" class="ingresar-btn">Ingresar</a>
    </header>
    <main>
        <section class="banner">
            <img src="Views/img/IMGNA.jpeg" alt="Ciudad">
        </section>
        <section class="info">
            <div class="info-box">
                <h2>¿Qué es Ecoba?</h2>
                <p>Ecoba es una plataforma interactiva donde los alumnos de escuelas bonaerenses pueden reportar problemas ecológicos o ambientales que identifiquen en su entorno. Utilizando un mapa, los estudiantes pueden señalar el lugar exacto del problema y clasificarlo según su tipo.</p>
            </div>
            <div class="info-box">
                <h2>¿Cuál es el objetivo de Ecoba?</h2>
                <p>El objetivo de Ecoba es concientizar a los estudiantes sobre los desafíos ambientales locales y fomentar su participación activa en la protección del medio ambiente. La plataforma también busca facilitar la identificación de problemas ecológicos para tomar medidas correctivas.</p>
            </div>
            <div class="info-box">
                <h2>¿Cómo puedo reportar un problema ambiental?</h2>
                <p>Para reportar un problema, solo tienes que seleccionar tu escuela de la lista, ubicar el lugar del problema en el mapa, y elegir la categoría a la que pertenece (contaminación, deforestación, residuos, etc.). Luego, puedes dejar una breve descripción y enviar el reporte.</p>
            </div>
            <div class="info-box">
                <h2>¿Quiénes pueden utilizar Ecoba?</h2>
                <p>Ecoba está diseñada para alumnos y docentes de escuelas bonaerenses que quieran involucrarse en la protección del medio ambiente. Es una herramienta educativa y colaborativa que invita a tomar un rol activo en la mejora del entorno natural.</p>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 ECOBA. Todos los derechos reservados.</p>
    </footer>
</body>

</html>