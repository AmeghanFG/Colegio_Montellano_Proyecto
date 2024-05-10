<?php 

include("modificar_usuario_system\conexion.php");

//Objeto derivado de la clase conexion
$obj_conexion = new conexion();


if($_SERVER["REQUEST_METHOD"] == "POST"){ //Obtener los datos del formulario
    
    //Validación para confirmar que se han introducido todos los datos
    if(empty($_POST['username_admin']) || empty($_POST['password']) ||empty($_POST['Correo_admin']) || empty($_POST['nombre_admin']) || empty($_POST['telefono_admin']))
    {
    echo "ERROR: no se han introducido todos los datos necesarios";
    }
    else {
        // Obtener los datos del formulario
        $user = $_POST['username_admin'];
        $nombre_completo = $_POST['nombre_admin'];
        $correo = $_POST['Correo_admin'];
        $contrasena = $_POST['password'];
        $telefono = $_POST['telefono_admin'];

            $obj_conexion->sentencia = "INSERT INTO administrador (Nombre_usuario, Nombre_Completo, Correo, Contrasena, Telefono) VALUES ('$user', '$nombre_completo', '$correo', '$contrasena', '$telefono');";
            $bandera = $obj_conexion->ejecutar_sentencia();
            echo "Administrador dado de alta con exito";
        
        
        
    }
}


?>