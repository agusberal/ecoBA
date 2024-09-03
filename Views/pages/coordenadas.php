<?php
header('Content-Type: application/json');

// Obtener el contenido JSON del POST
$data = file_get_contents('php://input');
$decodedData = json_decode($data, true);

if ($decodedData === null) {
    echo json_encode(['success' => false, 'message' => 'Error al decodificar JSON']);
    exit;
}

$lat = $decodedData['lat'] ?? null;
$lng = $decodedData['lng'] ?? null;
$description = $decodedData['description'] ?? null;

if ($lat === null || $lng === null || $description === null) {
    echo json_encode(['success' => false, 'message' => 'Datos incompletos']);
    exit;
}

// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecoba";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo json_encode(['success' => false, 'message' => 'Error de conexión: ' . $conn->connect_error]);
    exit;
}

$stmt = $conn->prepare("INSERT INTO coordenadas (lat, lng, description) VALUES (?, ?, ?)");
$stmt->bind_param("dds", $lat, $lng, $description);

if ($stmt->execute()) {
    echo json_encode(['success' => true, 'message' => 'Datos guardados correctamente']);
} else {
    echo json_encode(['success' => false, 'message' => 'Error al guardar los datos: ' . $stmt->error]);
}

$stmt->close();
$conn->close();
?>