<?php 

include("modificar_usuario_system\conexion.php");

//Objeto derivado de la clase conexion
$obj_conexion = new conexion();


if($_SERVER["REQUEST_METHOD"] == "POST"){ //Obtener los datos del formulario
    
    //Validación para confirmar que se han introducido todos los datos
    if(empty($_POST['username_profesor']) || empty($_POST['password']) ||empty($_POST['Correo_profesor']) || empty($_POST['nombre_profesor']) || empty($_POST['nacimiento_profesor']) || empty($_POST['apellido_profesor']) || empty($_POST['telefono_profesor']))
    {
    echo "ERROR: no se han introducido todos los datos necesarios";
   

    }
    else {
        // Obtener los datos del formulario
        $user = $_POST['username_profesor'];
        $nombres = $_POST['nombre_profesor'];
        $apellidos = $_POST['apellido_profesor'];
        $fecha_N = $_POST['nacimiento_profesor'];
        $correo = $_POST['Correo_profesor'];
        $contrasena = $_POST['password'];
        $telefono = $_POST['telefono_profesor'];

            $obj_conexion->sentencia = "INSERT INTO profesor (Nombre_usuario, Nombre, Apellidos, Fecha_nacimiento, Correo, Contrasena, Telefono) VALUES ('$user', '$nombres', '$apellidos', '$fecha_N', '$correo', '$contrasena', '$telefono');";
            $bandera = $obj_conexion->ejecutar_sentencia();
            echo "Profesor dado de alta con exito";
        
        
        
    }
}













?>