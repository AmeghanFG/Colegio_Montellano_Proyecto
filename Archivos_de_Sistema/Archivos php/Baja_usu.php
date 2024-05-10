<?php
// Incluye el archivo de conexión a la base de datos
include("modificar_usuario_system/conexion.php");

// Verifica si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el identificador del usuario desde el formulario
    $identificador = $_POST['identificador'] ?? '';

    // Validar que se proporcionó el identificador
    if (empty($identificador)) {
        echo "ERROR: Debe proporcionar el identificador del usuario.";
        exit;
    }

    // Buscar al usuario por el identificador y eliminarlo
    $stmt = $obj_conexion->prepare("DELETE FROM Usuarios WHERE Id_Usuario = ?");
    $stmt->bind_param("i", $identificador);

    // Ejecutar la eliminación
    if ($stmt->execute()) {
        echo "Usuario eliminado con éxito.";
    } else {
        echo "Error al eliminar el usuario: " . $stmt->error;
    }

    // Cerrar la declaración
    $stmt->close();
}

// Cerrar la conexión a la base de datos
$obj_conexion->cerrar_conexion();
?>
