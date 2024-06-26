<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Página Principal</title>
	<meta name="keywords" content="Público, información, servicios, Principal">
	<meta name="description" content="Página principal y parte pública del sistema SICAM">

	<!--Enlace de fuentes de Google Fonts: Gabarito-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
	<link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400..900&display=swap" rel="stylesheet">

	<!--Conexión con el archivo css externo-->
	<link rel="stylesheet" href="Styles_JS/Parte_publica.css">
</head>
<body>

<header> <!--Encabezado de la página, donde ira el logo de la página y menú de navegación principal-->
		<div id="Encabezado"> <!--TODO:Para mantener el logo y el icono a la misma altura-->
			<!--Logo del Colegio-->
			<div id="logo">
				<div id="Elementos_Logo">
					<img src="Imagenes/LogoCM.png" alt="Logo del Colegio Montellano">
						<p>Colegio<br>Montellano</p>
				</div>
			</div>
			<!--Cierre del contenedor del logo-->
			<!--Icono de menú hamburguesa para celulares y boton de iniciar sesión-->
			<div id="inicioSesion_iconoMenu"> <!--TODO: Se usa para mantener el icono y el botón juntos-->
				<a href="login.php"><button class="btn_iniciarSesion">Iniciar Sesión</button></a>
				<div id="icono_hamburgesa">
					<div id="barras_icono">
						<span class="linea1_menu"></span>
						<span class="linea2_menu"></span>
						<span class="linea3_menu"></span>
					</div>
				</div>
			</div>
			<!--Fin de creación del icono de menú hamburguesa-->
		</div>
		<div id="menu_hamburguesa"> <!--TODO Identifico la parte de menú con esto pero puedes poner el id en el nav y funcionaria correctamente-->
			<nav>
				<ul>
					<!--Agregar las páginas a donde va-->
					<li><a href="#localizacion"><button>Localización</button></a></li>
					<li><a href="/Caracteristicas"><button>Caracteristicas</button></a></li>
					<li><a href="/Instalaciones"><button>Instalaciones</button></a></li>
					<li><a href="/Servicios"><button>Servicios</button></a></li>
					<li><a href="/Informacion"><button>Información</button></a></li>
					<li><a href="/Proyectos"><button>Proyectos de Escuela</button></a></li>
					<li><a href="login.php"><button>Universitarios</button></a></li>

					<li id="Inicio_Sesion"><a href="login.php"><button>Iniciar Sesión</button></a></li>
				</ul>
			</nav>
		</div>
		<!--Cierre del menú de navegación-->
	</header>

	<script src="Styles_JS/Icono_Hamburguesa.js"></script> <!--*Enlace para animación de menú hamburguesa-->

	<section class="seccion_principal"><!--?Contenedor de sección principal, en caso de que se necesite agregar algo a los lados--> 

		<section id="carrusel">
			<div class="carrusel_contenido" id="slider">
				<div id="carrusel_elemento">
					<a href="/Elemento1"><img src="https://img.freepik.com/foto-gratis/pintura-lago-montana-montana-al-fondo_188544-9126.jpg" alt="Imagen del carrusel"></a>
				</div>
				<div id="carrusel_elemento">
					<a href="/Elemento1"><img src="https://static.vecteezy.com/system/resources/thumbnails/029/494/154/small_2x/ai-generated-ai-generative-beautiful-nature-outdoor-landscape-background-lake-river-forest-and-mountain-view-adventure-explore-vibe-graphic-art-photo.jpg" alt="Imagen del carrusel"></a>
				</div>
				<div id="carrusel_elemento">
					<a href="/Elemento1"><img src="img/3.jpg" alt="Imagen del carrusel"></a>
				</div>
				<div id="carrusel_elemento">
					<a href="/Elemento1"><img src="img/4.jpg" alt="Imagen del carrusel"></a>
				</div>
				<div id="carrusel_elemento">
					<a href="/Elemento1"><img src="img/5.jpg" alt="Imagen del carrusel"></a>
				</div>
				<div id="carrusel_elemento">
					<a href="/Elemento1"><img src="img/6.jpg" alt="Imagen del carrusel"></a>
				</div>
				<div id="carrusel_elemento">
					<a href="/Elemento1"><img src="img/7.jpg" alt="Imagen del carrusel"></a>
				</div>
				<div id="carrusel_elemento">
					<a href="/Elemento1"><img src="img/8.jpg" alt="Imagen del carrusel"></a>
				</div>
				<div id="carrusel_elemento">
					<a href="/Elemento1"><img src="img/9.jpg" alt="Imagen del carrusel"></a>
				</div>
				<div id="carrusel_elemento">
					<a href="/Elemento1"><img src="img/10.jpg" alt="Imagen del carrusel"></a>
				</div>
			</div>
			
		</section>
		<section class="botones">
			<div class="btn-left"><</div>
			<div class="btn-right">></i></div>
		</section>

		<script src="Styles_JS/Carrusel.js"></script>
		<!--Fin de carrusel-->

		<!--Sección para poner la localización-->
		<section id="localizacion"> 
            <div id="localizacion_contenido">
                <h1>Localización de nuestra institución.</h1><br/>
                <div id="mapa">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.79829193287!2d-103.69995169012704!3d19.247620646489036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x84255a9a4122fc95%3A0x6b3bed10118f15c!2sUniversidad%20de%20Colima!5e0!3m2!1ses!2smx!4v1711928534293!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
		</section>	
		<!--Fin de Sección para poner la localización-->

	</section>
</body>
</html>