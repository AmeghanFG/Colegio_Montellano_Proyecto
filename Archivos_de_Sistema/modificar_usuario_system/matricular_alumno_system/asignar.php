<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $valor_Id_Alumno = $_POST['id_alumno'];
    $valor_Id_Asignatura = $_POST['id_asignatura'];
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Base_SICAM";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Sentencia SQL para insertar datos en la tabla Asignados
$sql = "INSERT INTO Asignados (Id_Alumno, Id_Asignatura) VALUES (?, ?)";

// Preparar la consulta SQL
$stmt = $conn->prepare($sql);

// Vincular parámetros
$stmt->bind_param("ii", $valor_Id_Alumno, $valor_Id_Asignatura);

// Ejecutar la consulta SQL
if ($stmt->execute()) {
    echo "Los datos se insertaron correctamente.";
} else {
    echo "Error al insertar datos: " . $conn->error;
}

// Cerrar la consulta y conexión
$stmt->close();
$conn->close();

?>