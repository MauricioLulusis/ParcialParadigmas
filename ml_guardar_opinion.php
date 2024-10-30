<?php
// Configuración de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blogrock";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener la opinión desde el formulario
$opinion = $conn->real_escape_string($_POST['opinion'] ?? '');
$usuario = $conn->real_escape_string($_POST['usuario'] ?? 'Anónimo');

// Verificar que la opinión no esté vacía
if (empty($opinion)) {
    die("Opinión vacía. No se guardará.");
}

// Insertar la opinión en la tabla 'opiniones'
$sql = "INSERT INTO opiniones (usuario, contenido) VALUES ('$usuario', '$opinion')";

if ($conn->query($sql) === TRUE) {
    echo "Opinión guardada correctamente.";
} else {
    echo "Error al guardar la opinión: " . $conn->error;
}

// Cerrar la conexión
$conn->close();

// Redirigir de nuevo a opinion.php después de guardar la opinión
header("Location: ml_opinion.php");
exit();
?>
