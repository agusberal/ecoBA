<?php
header('Content-Type: application/json');

// Conexión a la base de datos (ajusta los detalles según tu configuración)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecoba";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo json_encode(['success' => false, 'message' => 'Error de conexión: ' . $conn->connect_error]);
    exit;
}

// Consulta para obtener las ubicaciones
$sql = "SELECT lat, lng, description FROM coordenadas";
$result = $conn->query($sql);

$locations = [];

if ($result->num_rows > 0) {
    // Guardar todas las ubicaciones en un array
    while($row = $result->fetch_assoc()) {
        $locations[] = $row;
    }
}

echo json_encode(['success' => true, 'locations' => $locations]);

$conn->close();
?>