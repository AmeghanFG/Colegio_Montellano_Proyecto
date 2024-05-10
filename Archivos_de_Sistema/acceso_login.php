<?php

include("conexion_login.php");
class acceder extends conexion
{
    public function validar($u_Ser,$p_ass)
    {
        $itera = 0; //Contador de iteraciones
        $conter=0;


        do{
            if($itera == 0)
            {
                $this->sentencia = "SELECT * FROM alumno WHERE Nombre_usuario= '".$u_Ser."' AND Contrasena='".$p_ass."'";
                $resultado = $this->ejecutar_sentencia();
                if ($resultado->num_rows > 0)
                {
                    echo "Acceso consedido redirigiendo";
                    header("Location: Administrador.html");
                    break;
                }
                    
        
            }else if($itera == 1)
             {
                $this->sentencia = "SELECT * FROM profesor WHERE Nombre_usuario= '".$u_Ser."' AND Contrasena='".$p_ass."'";
                $resultado = $this->ejecutar_sentencia();
                if ($resultado->num_rows > 0)
                {
                    echo "Acceso consedido redirigiendo";
                    header("Location: Administrador.html");
                    break;
                }
               
             }else if($itera == 2)
              {
                $this->sentencia = "SELECT * FROM administrador WHERE Nombre_usuario= '".$u_Ser."' AND Contrasena='".$p_ass."'";
                $resultado = $this->ejecutar_sentencia();
                if ($resultado->num_rows > 0)
                {
                    echo "Acceso consedido redirigiendo";
                    header("Location: Administrador.html");
                    break;
                }
                
               
             }

            $itera = $itera + 1; 
        }while($itera < 3);

         
         if($itera >= 3)
         {
            echo "<br><br>Acceso denegado<br>";
         }

        /*
        $this->sentencia ="SELECT * FROM administrador WHERE Nombre_usuario='".$u_Ser."' AND Contraseña='".$p_ass."'";
        $resultado = $this->ejecutar_sentencia();

        if ($resultado->num_rows > 0) 
        {
            echo "Acceso consedido redirigiendo";
            header("Location: Administrador.html");
        }
        else
        {
            $conter=1;
        }
        
        $this->sentencia ="SELECT * FROM profesor WHERE Nombre_usuario='".$u_Ser."' AND Contraseña='".$p_ass."'";
        $resultado = $this->ejecutar_sentencia();
        if ($resultado->num_rows > 0) 
        {
            echo "Acceso consedido redirigiendo";
            header("Location: Administrador.html");
        }
        else
        {
            $conter=2;
        }
        */
        

        
    }
}

?>