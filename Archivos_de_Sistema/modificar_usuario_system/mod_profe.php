<?php

include("conexion.php");

$obj_conexion = new conexion();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $id = $_POST['id_profesor'];
    $user = $_POST['username_profesor'];
    $nombres = $_POST['nombre_profesor'];
    $apellidos = $_POST['apellido_profesor'];
    $fecha = $_POST['nacimiento_profesor'];
    $correo = $_POST['Correo_profesor'];
    $contra = $_POST['password_profesor'];
    $tel = $_POST['telefono_profesor'];
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
        $obj_conexion->sentencia = "UPDATE Profesor SET Nombre_usuario='$user' WHERE Numero_Cuenta='$id'";
        $bandera = $obj_conexion->ejecutar_sentencia();
        
    }

    if(!empty($nombres)) {
        $obj_conexion->sentencia = "UPDATE Profesor SET Nombre='$nombres' WHERE Numero_Cuenta='$id'";
        $bandera = $obj_conexion->ejecutar_sentencia();
        
    }

    if(!empty($apellidos)) {
        $obj_conexion->sentencia = "UPDATE Profesor SET Apellidos='$apellidos' WHERE Numero_Cuenta='$id'";
        $bandera = $obj_conexion->ejecutar_sentencia();
        
    }

    if(!empty($fecha)) {
        $obj_conexion->sentencia = "UPDATE Profesor SET Fecha_nacimiento='$fecha' WHERE Numero_Cuenta='$id'";
        $bandera = $obj_conexion->ejecutar_sentencia();
        
    }

    if(!empty($correo)) {
        $obj_conexion->sentencia = "UPDATE Profesor SET Correo='$correo' WHERE Numero_Cuenta='$id'";
        $bandera = $obj_conexion->ejecutar_sentencia();
        
    }

    if(!empty($contra)) {
        $obj_conexion->sentencia = "UPDATE Profesor SET Contrasena='$contra' WHERE Numero_Cuenta='$id'";
        $bandera = $obj_conexion->ejecutar_sentencia();
        
    }

    if(!empty($id_G)) {
        $obj_conexion->sentencia = "UPDATE Profesor SET Telefono='$tel' WHERE Numero_Cuenta='$id'";
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
?>