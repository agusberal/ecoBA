<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ecoba</title>
    <!-- Agrego la librería de Folleto -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
    <style>
        /* Estilo para el contenedor del mapa */
        #mapid { height: 180px; }
    </style>
</head>
<body>
    <header>
        <img src="" alt="LOGO">
        <a href="../../index.php">Logout</a>
    </header>
    <main>
        <!-- Carrucel -->

        <!-- informacion -->
        <h1>ECOBA</h1>
        <!-- Aca tiene que ir el mapa -->
        <div id="mapid"></div>
        <div class="contenedor1">erwegwea</div>
        <div class="contenedor2">blablablab</div>
        <div class="contenedor3">papapppapap</div>

    </main>
    <footer>
        <a href="">Gmail</a>
        <a href="">Instagram</a>
        <a href="">Facebook</a>
    </footer>
    <!-- Agrego la librería de Folleto -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <script>
        // Inicializo el mapa
        var mymap = L.map('mapid').setView([-34.6037, -58.3816], 8); // Centro de la provincia de Buenos Aires

        // Agrego la capa de tiles
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
            maxZoom: 19
        }).addTo(mymap);

        // Agrego un marcador
        var marker = L.marker([-34.6037, -58.3816]).addTo(mymap);

        // Agrego una ventana emergente al marcador
        marker.bindPopup('Provincia de Buenos Aires');
    </script>
</body>
</html>