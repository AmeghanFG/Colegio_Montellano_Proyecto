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
    
	<link rel="stylesheet" href="modificar_usuario_system/mod_user(estilos).css">
</head>
<body>
	<header> <!--Encabezado de la página, donde ira el logo de la página-->
		<!--Logo del Colegio-->
		<div id="logo">
			<div id="Elementos_Logo">
				<img src="modificar_usuario_system/LogoCM.png" alt="Logo del Colegio Montellano">
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
				<form>
					<h3>Seleccione el tipo de usuario va a modificar:</h3>
					<!-- Botones de radio para seleccionar la opción -->
					<input type="radio" id="opcion1" name="opcion" value="opcion1" onchange="mostrarFormulario()" checked> 
					<label for="opcion1">alumno</label>
					<input type="radio" id="opcion2" name="opcion" value="opcion2" onchange="mostrarFormulario()">
					<label for="opcion2">profesor</label>
					<input type="radio" id="opcion3" name="opcion" value="opcion3" onchange="mostrarFormulario()">
					<label for="opcion3">administrador</label>
				</form>
			</div>

			<div id="formulario1">
				<!-- Título del formulario 1 -->
				
				<!-- Formulario para la opción 1 -->
				<form method="post" class="formulario" action="modificar_usuario_system/mod_alumno.php">
				<h4>cambiar informacion de alumno</h4>
				<!-- Campos del formulario 1 -->
				ingrese el id del alumno que modificara su informacion:
				<input type="text" class="per" name="id_alumno">
				<h4>ingrese la informacion que se solisita:</h4>
				nombre de usuario:<br>
				<input type="text" class="per" name="username_alumno"><br>
				nombre colmpleto del alumno:<br>
				<input type="text" class="per" name="nombre_alumno"><br>
				apellidos colmpleto del alumno:<br>
				<input type="text" class="per" name="apellido_alumno"><br>
				fecha de nacimiento:<br>
				<input type="date" class="per" name="nacimiento_alumno"><br>
				correo electronico:<br>
				<input type="text" class="per" name="Correo_alumno"><br>
				contraseña:<br>
				<input type="text" class="per" name="password_alumno"><br>
				ID de grupo:<br>
				<input type="text" class="per" name="ID_grupo"><br>
				<!-- Botón de envío para el formulario 1 -->
				<input type="submit" class="per" value="Enviar">
				</form>
			</div>

			<div id="formulario2" style="display: none;">
				<!-- Formulario para la opción 2 -->
				<form method="post" class="formulario" action="modificar_usuario_system/mod_profe.php">
				<!-- Título del formulario 2 -->
				<h4>cambiar informacion de prfesor</h4><br>
				<!-- Campos del formulario 2 -->
				ingrese el id del profesor que modificara su informacion:
				<input type="text" name="id_profesor">
				<h4>ingrese la informacion que se solisita:</h4>
				nombre de usuario:<br>
				<input type="text" name="username_profesor"><br>
				contraseña:<br>
				<input type="text" name="password_profesor"><br>
				correo electronico:<br>
				<input type="text" name="Correo_profesor"><br>
				nombre colmpleto del profesor:<br>
				<input type="text" name="nombre_profesor"><br>
				fecha de nacimiento:<br>
				<input type="date" name="nacimiento_profesor"><br>
				telefono:<br>
				<input type="text" name="telefono_profesor"><br>
				apellidos colmpleto del profesor:<br>
				<input type="text" name="apellido_profesor"><br>
				
				<!-- Botón de envío para el formulario 2 -->
				<input type="submit" value="Enviar">
				</form>
			</div>

			<div id="formulario3" style="display: none;">
				<!-- Formulario para la opción 3 -->
				<form method="post" class="formulario" action="modificar_usuario_system/mod_admin.php">
				<!-- Título del formulario 3 -->
				<h4>cambiar informacion de administrador</h4>
				<!-- Campos del formulario 3 -->
				ingrese el id del administrador que modificara su informacion:
				<input type="text" name="id_admin">
				<h4>ingrese la informacion que se solisita:</h4>
				nombre de usuario:<br>
				<input type="text" name="username_admin"><br>
				contraseña:<br>
				<input type="text" name="password_admin"><br>
				correo electronico:<br>
				<input type="text" name="Correo_admin"><br>
				nombre colmpleto del administrador:<br>
				<input type="text" name="nombre_admin"><br>
				telefono:<br>
				<input type="text" name="telefono_admin"><br>
				<!-- Botón de envío para el formulario 3 -->
				<input type="submit" value="Enviar">
				</form>
			</div>

		</div>
        <!--Fin de formulario para ingresar nuevo usuario-->
	</section>
	
<!-- Script JavaScript para controlar la visibilidad de los formularios -->
    <script>
	// Función para mostrar el formulario correspondiente según la opción seleccionada
	function mostrarFormulario() {
		// Obtener el valor de la opción seleccionada
		var opcion = document.querySelector('input[name="opcion"]:checked').value;
		// Mostrar el formulario 1 si la opción es 'opcion1', de lo contrario ocultarlo
		document.getElementById('formulario1').style.display = (opcion === 'opcion1') ? 'block' : 'none';
		// Mostrar el formulario 2 si la opción es 'opcion2', de lo contrario ocultarlo
		document.getElementById('formulario2').style.display = (opcion === 'opcion2') ? 'block' : 'none';
		// Mostrar el formulario 3 si la opción es 'opcion3', de lo contrario ocultarlo
		document.getElementById('formulario3').style.display = (opcion === 'opcion3') ? 'block' : 'none';
	}
	</script>

	<script src="modificar_usuario_system/Icono_Hamburguesa.js"></script>
</body>
</html>