<?php
// Incluye el archivo de conexión a la base de datos
include("modificar_usuario_system/conexion.php");

// Crear una instancia de la clase conexion
$obj_conexion = new conexion();

// Verifica que la conexión a la base de datos se haya establecido correctamente
if (!$obj_conexion) {
    echo "ERROR: No se pudo establecer la conexión a la base de datos.";
    exit;
}

// Verifica si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el nombre de la asignatura desde el formulario
    $nombre_asignatura = $_POST['nombre_asignatura'] ?? '';
    
    // Validar que el nombre de la asignatura se haya proporcionado
    if (empty($nombre_asignatura)) {
        echo "ERROR: Debe proporcionar el nombre de la asignatura.";
        exit;
    }
    
    // Buscar el ID de la asignatura según el nombre
    $stmt = $obj_conexion->prepare("SELECT Id_Asignatura FROM Asignatura WHERE Nombre = ?");
    $stmt->bind_param("s", $nombre_asignatura);
    $stmt->execute();
    $stmt->bind_result($id_asignatura);
    $stmt->fetch();
    $stmt->close();

    // Si la asignatura no existe
    if (empty($id_asignatura)) {
        echo "ERROR: No se encontró la asignatura.";
        exit;
    }

    // Eliminar la relación entre el alumno y la asignatura en la tabla Asignados
    $stmt = $obj_conexion->prepare("DELETE FROM Asignados WHERE Id_Asignatura = ?");
    $stmt->bind_param("i", $id_asignatura);

    if ($stmt->execute()) {
        echo "Asignatura dada de baja con éxito.";
    } else {
        echo "Error al dar de baja la asignatura: " . $stmt->error;
    }

    // Cerrar la declaración
    $stmt->close();
}

// Cerrar la conexión a la base de datos
$obj_conexion->cerrar_conexion();
?>
