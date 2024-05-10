<?php

include("conexion.php");

$obj_conexion = new conexion();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $id = $_POST['id_alumno'];
    $user = $_POST['username_alumno'];
    $nombres = $_POST['nombre_alumno'];
    $apellidos = $_POST['apellido_alumno'];
    $fecha = $_POST['nacimiento_alumno'];
    $correo = $_POST['Correo_alumno'];
    $contra = $_POST['password_alumno'];
    $id_G = $_POST['ID_grupo'];
}

if (empty($id)) {
    echo "ERROR: no se ingreso el id para hacer el cambio de informacion regresando";
    sleep (2);
    if(isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER'])){
        // Redirige a la página anterior
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit; // Termina el script después de redirigir
    } else {
        // Si no hay URL de referencia, redirige a una página predeterminada o muestra un mensaje de error
        header("Location: pagina_predeterminada.php");
        exit; // Termina el script después de redirigir
    }
    
} else {
    if(!empty($user)) {
        $obj_conexion->sentencia = "UPDATE Alumno SET Nombre_usuario='$user' WHERE Numero_Cuenta='$id'";
        $bandera = $obj_conexion->ejecutar_sentencia();
        
    }

    if(!empty($nombres)) {
        $obj_conexion->sentencia = "UPDATE Alumno SET Nombre='$nombres' WHERE Numero_Cuenta='$id'";
        $bandera = $obj_conexion->ejecutar_sentencia();
        
    }

    if(!empty($apellidos)) {
        $obj_conexion->sentencia = "UPDATE Alumno SET Apellidos='$apellidos' WHERE Numero_Cuenta='$id'";
        $bandera = $obj_conexion->ejecutar_sentencia();
        
    }

    if(!empty($fecha)) {
        $obj_conexion->sentencia = "UPDATE Alumno SET Fecha_nacimiento='$fecha' WHERE Numero_Cuenta='$id'";
        $bandera = $obj_conexion->ejecutar_sentencia();
        
    }

    if(!empty($correo)) {
        $obj_conexion->sentencia = "UPDATE Alumno SET Correo='$correo' WHERE Numero_Cuenta='$id'";
        $bandera = $obj_conexion->ejecutar_sentencia();
        
    }

    if(!empty($contra)) {
        $obj_conexion->sentencia = "UPDATE Alumno SET Contrasena='$contra' WHERE Numero_Cuenta='$id'";
        $bandera = $obj_conexion->ejecutar_sentencia();
        
    }

    if(!empty($id_G)) {
        $obj_conexion->sentencia = "UPDATE Alumno SET Id_Grupo='$id_G' WHERE Numero_Cuenta='$id'";
        $bandera = $obj_conexion->ejecutar_sentencia();
        
    }

    echo "cambios realisados";
    sleep (2);
    if(isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER'])){
        // Redirige a la página anterior
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit; // Termina el script después de redirigir
    } else {
        // Si no hay URL de referencia, redirige a una página predeterminada o muestra un mensaje de error
        header("Location: pagina_predeterminada.php");
        exit; // Termina el script después de redirigir
    }
}
?>


