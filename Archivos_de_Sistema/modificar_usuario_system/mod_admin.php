<?php

include("conexion.php");

$obj_conexion = new conexion();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $id = $_POST['id_admin'];
    $user = $_POST['username_admin'];
    $nombres = $_POST['nombre_admin'];
    $correo = $_POST['Correo_admin'];
    $contra = $_POST['password_admin'];
    $tel = $_POST['telefono_admin'];
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
        $obj_conexion->sentencia = "UPDATE Administrador SET Nombre_usuario='$user' WHERE Numero_Cuenta='$id'";
        $bandera = $obj_conexion->ejecutar_sentencia();
        
    }

    if(!empty($nombres)) {
        $obj_conexion->sentencia = "UPDATE Administrador SET Nombre_Completo='$nombres' WHERE Numero_Cuenta='$id'";
        $bandera = $obj_conexion->ejecutar_sentencia();
        
    }

    if(!empty($correo)) {
        $obj_conexion->sentencia = "UPDATE Administrador SET Correo='$correo' WHERE Numero_Cuenta='$id'";
        $bandera = $obj_conexion->ejecutar_sentencia();
        
    }

    if(!empty($contra)) {
        $obj_conexion->sentencia = "UPDATE Administrador SET Contrasena='$contra' WHERE Numero_Cuenta='$id'";
        $bandera = $obj_conexion->ejecutar_sentencia();
        
    }

    if(!empty($id_G)) {
        $obj_conexion->sentencia = "UPDATE Administrador SET Telefono='$tel' WHERE Numero_Cuenta='$id'";
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
