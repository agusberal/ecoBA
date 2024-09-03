<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
    <style>
        #map {
            height: 400px; /* Altura específica */
            width: 400px;   /* Ancho del 100% del contenedor */
            max-width: 1000px; /* Ancho máximo opcional */
            margin: 0 auto; /* Centrado horizontal */
        }
        body, html {
            margin: 0;
            padding: 0;
            height: 100%; /* Asegura que el body ocupe toda la pantalla */
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
    </style>
</head>
<body>
        <?php
            include ('../../Controller/conexion.php');
        ?>
    <h1>Mapa</h1>
    <div id="map"></div>

    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
    <script>
        // Inicializa el mapa centrado en Buenos Aires
        var map = L.map('map').setView([-34.6037, -58.3816], 13); // Coordenadas

    // Carga los tiles de OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19
    }).addTo(map);

    // Evento para capturar clics en el mapa
    map.on('click', function(e) {
        // Obtener las coordenadas donde se hizo clic
        var lat = e.latlng.lat;
        var lng = e.latlng.lng;

        // Crear un formulario en un popup sobre el mapa
        var popupContent = `
            <div class="popup-form">
                <label>Descripción:</label>
                <input type="text" id="description" placeholder="Escribe aquí">
                <button onclick="saveCoordinates(${lat}, ${lng})">Guardar</button>
            </div>
        `;

        // Crear un popup en la ubicación clicada con el formulario
        var popup = L.popup()
            .setLatLng(e.latlng)
            .setContent(popupContent)
            .openOn(map);
    });

    // Función para guardar las coordenadas y enviar los datos al servidor
    function saveCoordinates(lat, lng) {
    // Obtener el valor del input
    var description = document.getElementById('description').value;

    // Verificar si el campo de descripción no está vacío
    if (description.trim() === '') {
        alert('Por favor, ingresa una descripción.');
        return;
    }

    // Crear un marcador en el mapa en las coordenadas dadas
    var marker = L.marker([lat, lng]).addTo(map);
    marker.bindPopup(`<b>${description}</b><br>Lat: ${lat}, Lng: ${lng}`).openPopup();

    // Cerrar el popup del formulario
    map.closePopup();

    // Enviar los datos al servidor usando fetch
    fetch("coordenadas.php", {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            lat: lat,
            lng: lng,
            description: description
        })
    })
    .then(response => {
        if (!response.ok) {
            throw new Error(`HTTP error! Status: ${response.status}`);
        }
        return response.json();
    })
    .then(data => {
        if (data.success) {
            alert('Datos guardados correctamente.');
        } else {
            alert('Error al guardar los datos: ' + (data.message || 'Desconocido'));
        }
    })
    .catch(error => {
    console.error('Error:', error);
    alert('Hubo un problema al enviar los datos: ' + (error.message || 'Desconocido'));
    });
}
    </script>
</body>
</html>