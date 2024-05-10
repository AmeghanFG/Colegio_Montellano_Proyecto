<?php 

include("modificar_usuario_system\conexion.php");

$obj_conexion = new conexion();


if($_SERVER["REQUEST_METHOD"] == "POST"){ //Obtener los datos del formulario
    
    //Validación para confirmar que se han introducido todos los datos
    if(empty($_POST['username_alumno']) || empty($_POST['nombre_alumno']) ||empty($_POST['apellido_alumno']) || empty($_POST['nacimiento_alumno']) || empty($_POST['Correo_alumno']) || empty($_POST['password']) )
    {
    echo "ERROR: no se han introducido todos los datos necesarios";
   

    }
    else {
        // Obtener los datos del formulario
        $user = $_POST['username_alumno'];
        $nombres = $_POST['nombre_alumno'];
        $apellidos = $_POST['apellido_alumno'];
        $fecha_N = $_POST['nacimiento_alumno'];
        $correo = $_POST['Correo_alumno'];
        $contrasena = $_POST['password'];

        //Hacer una opción por si no se ingresa el id_grupo, ya que no es un campo obligatorio
        if(!empty($_POST['ID_grupo']))
        {
            $id_G = $_POST['ID_grupo'];

            $obj_conexion->sentencia = "INSERT INTO alumno (Nombre_usuario, Nombre, Apellidos, Fecha_nacimiento, Correo, Contrasena, ID_Grupo) VALUES ('$user', '$nombres', '$apellidos', '$fecha_N', '$correo', '$contrasena', '$id_G');";
            $bandera = $obj_conexion->ejecutar_sentencia();
            echo "Alumno dado de alta con exito";
        }
        else
        {
            $obj_conexion->sentencia = "INSERT INTO alumno (Nombre_usuario, Nombre, Apellidos, Fecha_nacimiento, Correo, Contrasena) VALUES ('$user', '$nombres', '$apellidos', '$fecha_N', '$correo', '$contrasena');";
            $bandera = $obj_conexion->ejecutar_sentencia();
            echo "Alumno dado de alta con exito";
        }
        
        
    }
}













?>