<?php
include("conexion_login.php");
class acceder extends conexion{
    public function validar($u_Ser,$p_ass)
    {
        $this->sentencia ="SELECT * FROM usuarios WHERE Nombre_Usuario='".$u_Ser."' AND pass_word='".$p_ass."'";
        $resultado = $this->ejecutar_sentencia();
        if ($resultado->num_rows > 0) {
            echo "Acceso consedido redirigiendo";
            header("Location: Administrador.html");
            exit();
        } else 
        {
            echo "Acceso denegado",
            header("Location: login.php");
            exit();
        }
    }
}

?>