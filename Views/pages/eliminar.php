<?php
header('Content-Type: application/json');

// Conexión a la base de datos
$servername = "localhost";
$username = "usuario";
$password = "contraseña";
$dbname = "basedatos";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo json_encode(['success' => false, 'message' => 'Error de conexión: ' . $conn->connect_error]);
    exit;
}

// Obtener los datos enviados por el cliente
$data = json_decode(file_get_contents("php://input"), true);
$lat = $data['lat'];
$lng = $data['lng'];

// Consulta para eliminar la ubicación de la base de datos
$sql = "DELETE FROM coordenadas WHERE lat = ? AND lng = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("dd", $lat, $lng);

if ($stmt->execute()) {
    echo json_encode(['success' => true, 'message' => 'Coordenadas eliminadas correctamente.']);
} else {
    echo json_encode(['success' => false, 'message' => 'Error al eliminar las coordenadas.']);
}

$stmt->close();
$conn->close();
?>
