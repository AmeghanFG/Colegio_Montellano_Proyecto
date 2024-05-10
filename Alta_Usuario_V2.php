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
    
	<link rel="stylesheet" href="Styles_JS/Estilos_AltaUsuario.css">
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

				<!-- Formulario de selección de opciones -->
				<form id="formulario-opciones" method="post" >
                   <h3>Seleccione el tipo de usuario va a modificar:</h3>
                   <select id="opcion" name="opcion" onchange="mostrarFormulario()">
                     <option value="opcion1" selected>Alumno</option>
                     <option value="opcion2">Profesor</option>
                     <option value="opcion3">Administrador</option>
                  </select>
                </form>


			<div id="formulario1">
				<!-- Formulario para Alta de Alumnos -->
				
				<!-- Formulario para la opción 1 -->
				<form method="post" class="formulario" action="Funcion_AltaAlumno.php">
				<h2>Dar de alta un alumno: </h2>

				<!-- Campos del formulario 1 -->
				<label for="nombre_user">Nombre de usuario:</label> 
				<input type="text" id="nombre_user" class="per" name="username_alumno" placeholder="Ingrese un usuario" required><br>

				<label for="nombre_alumno">Nombre completo del alumno:</label>
				<input type="text" id="nombre_alumno" class="per" name="nombre_alumno" placeholder="Ingrese nombre y apellido" required><br>

				<label for="password">Contraseña para usuario:</label>
				<div id="generar_password">
					<input type="text" id="password" name="password" placeholder="Ingrese manualmente o genere una" maxlength="12" minlength="12" pattern="^(?=.*[A-Za-z])[A-Za-z\d]{10}$" required tabindex="">
					<button type="button" id="btn_generarPassword">Generar Contraseña</button>
				</div><br>

				<label for="correo">Correo electrónico</label>
				<input type="text" id="correo" class="per" name="Correo_alumno" placeholder="usuario@proveedor.tipo" required><br>

				<label for="telefono_alumno">Teléfono</label>
				<input type="text" id="telefono_alumno" name="telefono_alumno" pattern="[0-9]{10}" maxlength="10" placeholder="(Código de área) Número sin espacios" required><br>

				<label for="fecha">Fecha de nacimiento:</label>
				<input type="date" id="fecha" class="per" name="nacimiento_alumno" min="1922-01-01" max="2020-01-01" required><br>

				<label for="grupo">Grupo al que pertenece el alumno:</label>  
				<select name="id_grupo" id="grupo">
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
				<!-- Botón de envío para el formulario 1 -->
				<input type="submit" id="btn_registrar" class="per" value="Registrar usuario">
				</form>
			</div>

			<!-- Formulario 2 -->
			<div id="formulario2" style="display: none;">
				<!-- Formulario para Alta de Profesores -->
				<form method="post" class="formulario" action="Funcion_AltaProfesor.php">
				
				<h2>Dar de alta un profesor: </h2><br>
				<!-- Campos del formulario 2 -->

				<label for="user_prof">Nombre de usuario: </label>
				<input type="text" id="user_prof" name="username_profesor" placeholder="Ingrese usuario" required><br>

				<label for="nombre_prof">Nombre completo del profesor:</label>
                <input type="text" id="nombre_prof" name="nombre_profesor" placeholder="Ingrese nombre y apellido" required><br>

				<label for="password2">Contraseña para usuario:</label>
			     <div id="generar_password">
            	   <input type="text" id="password2" name="password" placeholder="Ingrese manualmente o genere una" maxlength="12" minlength="12" pattern="^(?=.*[A-Za-z])[A-Za-z\d]{10}$" required tabindex="">
				   <button type="button" id="btn_generarPasswordForm2">Generar Contraseña</button>
			     </div> <br>
				
				<label for="Correo_profesor">Correo electrónico</label>	
				<input type="text" id="Correo_profesor" name="Correo_profesor" placeholder="usuario@proveedor.tipo" required><br>

				<label for="telefono_profesor">Teléfono</label>
				<input type="text" id="telefono_profesor" name="telefono_profesor" pattern="[0-9]{10}" maxlength="10" placeholder="(Código de área) Número sin espacios" required><br>

				<label for="fecha_prof">Fecha de nacimiento: </label>
				<input type="date" id="fecha_prof" name="nacimiento_profesor" min="1922-01-01" max="2020-01-01" required><br>
				
				
				<!-- Botón de envío para el formulario 2 -->
				<input type="submit" id="btn_registrar" value="Registrar profesor" >
				</form>
			</div>

			<div id="formulario3" style="display: none;">
				<!-- Formulario para la opción 3 -->
				<form method="post" class="formulario" action="Funcion_AltaAdmin.php">
				<!-- Título del formulario 3 -->
				<h2>Dar de alta un administrador: </h2>
				<!-- Campos del formulario 3 -->

				<label for="user_admin">Nombre de usuario:</label>
				<input type="text" name="username_admin" id="user_admin" placeholder="Ingrese un usuario" required><br>

				<label for="nombre_admin">Nombre completo:</label>
				<input type="text" id="nombre_admin" name="nombre_admin" placeholder="Ingrese nombre y apellido" required><br>

				<label for="password">Contraseña para usuario:</label>
			     <div id="generar_password">
            	   <input type="text" id="password3" name="password" placeholder="Ingrese manualmente o genere una" maxlength="12" minlength="12" pattern="^(?=.*[A-Za-z])[A-Za-z\d]{10}$" required tabindex="">
				   <button type="button" id="btn_generarPasswordForm3">Generar Contraseña</button>
			     </div><br>

			    <label for="correo_admin">Correo Electrónico:</label>
				<input type="text" id="correo_admin" name="Correo_admin" placeholder="usuario@proveedor.tipo" required><br>

				<label for="telefono_admin">Teléfono</label>
				<input type="text" id="telefono_admin" name="telefono_admin" pattern="[0-9]{10}" maxlength="10" placeholder="(Código de área) Número sin espacios" required><br>

				<label for="fecha_admin">Fecha de nacimiento: </label>
				<input type="date" id="fecha_admin" name="nacimiento_admin" min="1922-01-01" max="2020-01-01" required><br>

				<!-- Botón de envío para el formulario 3 -->
				<input type="submit" id="btn_registrar" value="Registrar administrador" >
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