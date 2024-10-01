<?php
include("conexion.php");

if (!empty($_POST["ingresar"])) {
    if (!empty($_POST["usuario"]) && !empty($_POST["contraseña"])) {
        $user = $_POST["usuario"];
        $clave = $_POST["contraseña"];

        // Utilizar sentencia preparada con parámetros
        $stmt = $Ruta->prepare("SELECT * FROM usuario WHERE user = ? AND password = ?");
        $stmt->bind_param("ss", $user, $clave);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $verificamos = $result->fetch_object();
            // Iniciar sesión
            session_start();
            $_SESSION["logueado"] = true;
            header("Location: ../Views/pages/inicio.php");
            exit;
        } else {
            echo "<script>alert('No tienes Cuenta');</script>";
        }
    } else {
        echo "Debe ingresar usuario y/o contraseña";
    }
}
?>