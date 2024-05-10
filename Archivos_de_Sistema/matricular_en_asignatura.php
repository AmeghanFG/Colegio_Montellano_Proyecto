<!DOCTYPE html>
<html>
<head>
	<!--!Se debe validar mejor, por ejemplo, en contraseña debe aparecer que falta-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="HTML, CSS, Colegio Montellano, Proyecto final de programación web II">
    <meta name="description" content="Proyecto en conjunto para la realización de un sistema de control escolar para el Colegio Montellano">
	<title>Alta de nuevos usuarios</title>

    <!--Enlace de fuentes de Google Fonts: Gabarito-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
	<link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400..900&display=swap" rel="stylesheet">
    
	<link rel="stylesheet" href="Styles_JS/Estilos_AltaUsuarios.css">
</head>
<body>
	<header> <!--Encabezado de la página, donde ira el logo de la página-->
		<!--Logo del Colegio-->
		<div id="logo">
			<div id="Elementos_Logo">
				<img src="Imagenes/LogoCM.png" alt="Logo del Colegio Montellano">
				<p>Colegio<br>Montellano</p>
			</div>
		</div>
		<!--Cierre del contenedor del logo y apertura del de menú-->
		<div id="Menu_navegacion">
			<nav>
				<ul>
					<!--Agregar las páginas a donde va-->
					<li><a href="/Instalaciones"><button>Instalaciones</button></a></li>
					<li><a href="/Servicios"><button>Servicios</button></a></li>
					<li><a href="/Informacion"><button>Información</button></a></li>
					<li><a href="/Proyectos"><button>Proyectos de Escuela</button></a></li>
					<li><a href="/Universitarios"><button>Universitarios</button></a></li>
				</ul>
			</nav>
		</div>
		<!--Cierre del menú de navegación-->
	</header>

	<section class="seccion_principal">
		<!--Menú Lateral de la sección principal-->
		<div id="menu_lateral">
			<!--Icono de menú hamburguesa para celulares-->
			<div id="icono_hamburgesa">
				<div id="barras_icono">
					<span class="linea1_menu"></span>
					<span class="linea2_menu"></span>
					<span class="linea3_menu"></span>
				</div>
			</div>
			<!--Fin de creación del icono de menú hamburguesa para celulares-->
			<!--Inicio del menú lateral-->
			<nav id="menu_hamburguesa">
				<h3>Menú</h3>
				<ul>
					<li><a href="Alta_Usuario.html"><button>Alta de un usuario</button></a></li>
					<li><a href="/funcion_altaAsignatura.html"><button>Alta de asignatura</button></a></li>
					<li><a href="/funcion_Matricular.html"><button>Matricular alumnos en asignatura</button></a></li>
					<li><a href="/funcion_modificarDatosAlumnos.html"><button>Modificar datos de alumnos</button></a></li>
					<li><a href="/funcion_modificarDatosAsignatura.html"><button>Modificar datos de asignatura</button></a></li>
					<li><a href="/funcion_bajaUsuario.html"><button>Baja de usuario</button></a></li>
					<li><a href="/funcion_bajaAsigtura.html"><button>Baja de asignatura</button></a></li>
                    <li><a href="Administrador.html"><button>Volver atrás</button></a></li>
					<li id="volver_partePublica"><a href="/secciónPublica.html"><button>Volver a sección púlica</button></a></li>
					
					<li id="cerrar_sesion"><a href=""><button>Cerrar Sesión</button></a></li>
				</ul>
			</nav>
		</div>
		<!--Fin del Menú Lateral de la sección principal-->
		
        <!--Formulario para ingresar nuevo usuario-->
		<div id="formulario">
            <div id="cambio_menu">

			<div id="formulario1">
				<!-- Formulario para Alta de Alumnos -->

				
				<!-- Formulario para la opción 1 -->
				<form method="post" class="formulario" action="">
				<h2>Matricular Clase en asignatura: </h2>
				<!-- Campos del formulario 1 -->
                <label for="grado">Seleccione seleccione un grado:</label>
            <select name="grado">
            <?php
            // Establecer la conexión a la base de datos
            $conexion = new mysqli("localhost", "root", "", "Base_SICAM");

            // Comprobar la conexión
            if ($conexion->connect_error) {
                die("Error de conexión: " . $conexion->connect_error);
            }

            // Consulta SQL para obtener los datos
            $consulta = "SELECT Id_Grupos, Grado, Grupo FROM Grupos";

            // Ejecutar la consulta
            $resultado = $conexion->query($consulta);

            // Verificar si se obtuvieron resultados
            if ($resultado->num_rows > 0) {
                // Iterar sobre los resultados y generar las opciones del select
                while ($fila = $resultado->fetch_assoc()) {
                    echo "<option value='" . $fila["Id_Grupos"] . "'>" . $fila["Grado"] ."</option>";
                }
            } else {
                echo "<option value=''>No hay Grupos disponibles</option>";
            }

            // Cerrar la conexión
            $conexion->close();
            ?>
            </select>

                <label for="grupo">Seleccione un grupo:</label>

            <select name="grupo">
            <?php
            // Establecer la conexión a la base de datos
            $conexion = new mysqli("localhost", "root", "", "Base_SICAM");

            // Comprobar la conexión
            if ($conexion->connect_error) {
                die("Error de conexión: " . $conexion->connect_error);
            }

            // Consulta SQL para obtener los datos
            $consulta = "SELECT Id_Grupos, Grado, Grupo FROM Grupos";

            // Ejecutar la consulta
            $resultado = $conexion->query($consulta);

            // Verificar si se obtuvieron resultados
            if ($resultado->num_rows > 0) {
                // Iterar sobre los resultados y generar las opciones del select
                while ($fila = $resultado->fetch_assoc()) {
                    echo "<option value='" . $fila["Id_Grupos"] . "'>" . $fila["Grupo"] . "</option>";
                }
            } else {
                echo "<option value=''>No hay Grupos disponibles</option>";
            }

            // Cerrar la conexión
            $conexion->close();
            ?>
            </select>
            

                <label for="id">Seleccione seleccione que grupo o alumno va a matricular:</label>
			<select name="id">
			<?php
            // Establecer la conexión a la base de datos
            $conexion = new mysqli("localhost", "root", "", "Base_SICAM");

            // Comprobar la conexión
            if ($conexion->connect_error) {
                die("Error de conexión: " . $conexion->connect_error);
            }

            // Consulta SQL para obtener los datos
            $consulta = "SELECT Id_Grupos, Grado, Grupo FROM Grupos";

            // Ejecutar la consulta
            $resultado = $conexion->query($consulta);

            // Verificar si se obtuvieron resultados
            if ($resultado->num_rows > 0) {
                // Iterar sobre los resultados y generar las opciones del select
                while ($fila = $resultado->fetch_assoc()) {
                    echo "<option value='" . $fila["Id_Grupos"] . "'>" . $fila["Grado"] ."-" . $fila["Grupo"] . "</option>";
                }
            } else {
                echo "<option value=''>No hay Grupos disponibles</option>";
            }
            // Cerrar la conexión
            $conexion->close();
            ?>
            

            <?php
            //nuevo proceso
             // Establecer la conexión a la base de datos
            $conexion = new mysqli("localhost", "root", "", "Base_SICAM");

            // Comprobar la conexión
            if ($conexion->connect_error) {
                die("Error de conexión: " . $conexion->connect_error);
            }

            $consulta = "SELECT * FROM alumno";

            $resultado = $conexion->query($consulta);

            if($resultado->num_rows > 0)
            {
                while ($fila = $resultado->fetch_assoc()) {
                    echo "<option value='" . $fila["Numero_Cuenta"] . "'>" . $fila["Nombre_Completo"] . "</option>";
                }
            } else {
                echo "<option value=''>No hay alumnos disponibles</option>";
            }

            ?>
			</select>

            <label for="id_asig">Seleccione la asignatura:</label>
			<select name="id_asig">
			<?php
            // Establecer la conexión a la base de datos
            $conexion = new mysqli("localhost", "root", "", "Base_SICAM");

            // Comprobar la conexión
            if ($conexion->connect_error) {
                die("Error de conexión: " . $conexion->connect_error);
            }

            // Consulta SQL para obtener los datos
            $consulta = "SELECT Id_Asignatura, Nombre FROM asignatura";

            // Ejecutar la consulta
            $resultado = $conexion->query($consulta);

            // Verificar si se obtuvieron resultados
            if ($resultado->num_rows > 0) {
                // Iterar sobre los resultados y generar las opciones del select
                while ($fila = $resultado->fetch_assoc()) {
                    echo "<option value='" . $fila["Id_Asignatura"] . "'>" . $fila["Nombre"] . "</option>";
                }
            } else {
                echo "<option value=''>No hay elementos disponibles</option>";
            }

            // Cerrar la conexión
            $conexion->close();
            ?>
			</select>

			
			<input type="submit" name="subir_clase" value="asignar" required tabindex="3"> 
				
				</form>
			</div>

		</div>
        <!--Fin de formulario para ingresar nuevo usuario-->
	</section>
	
<!-- Script JavaScript para controlar la visibilidad de los formularios -->
    <script>

	     /*Función para enviar formulario-opciones de manera automatica
		 function enviarOpcion() {
			document.getElementById('opcion').addEventListener('change', function() {
            document.getElementById('formulario-opciones').submit(); // Envía automáticamente el formulario cuando se selecciona una opción
	        });
		 }
		*/
		

	// Función para mostrar el formulario correspondiente según la opción seleccionada
	function mostrarFormulario() {
       // Obtain the selected value
       var opcion = document.getElementById("opcion").value;
       // Show/hide form elements based on the selected value
        document.getElementById("formulario1").style.display = (opcion === 'opcion1') ? 'block' : 'none';
       document.getElementById("formulario2").style.display = (opcion === 'opcion2') ? 'block' : 'none';
         document.getElementById("formulario3").style.display = (opcion === 'opcion3') ? 'block' : 'none';
    }

	</script>

	<script src="Styles_JS\Contrasena_Aleatoria.js"></script>
	<script src="Styles_JS/Icono_Hamburguesa.js"></script>

</body>
</html>