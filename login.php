<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="Styles_JS/login(personalisacion).css">
    <title>Login</title>
    <meta name="keywords" content="HTML, CSS, Colegio Montellano, Proyecto final de programación web II, Login, Usuario, Clave, Acceso">
    <meta name="description" content="Proyecto en conjunto para la realización de un sistema de control escolar para el Colegio Montellano, página de login">

    <!--Enlace de fuentes de Google Fonts: Gabarito-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
	<link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400..900&display=swap" rel="stylesheet">
</head>
<body class="mi-body">
<div id="contenido">
    <div id="logo">
        <img src="Imagenes/logo.png" />
        <h2>Inicio de sesión</h2>
    </div>

    <div id="interacion">
        <p id="instrucciones">Ingrese a continuación su número de cuenta de trabajador o estudiante y su clave de acceso.</p>
        <form method="post" action="">
            <br>
            <input type="text" name="user" placeholder="No. de Cuenta"><br>
            <br>
            <input type="password" name="pass" placeholder="Contraseña"><br>
            <br>
            <input type="submit" name="Acceder" value="Iniciar Sesión">
            <br><br>
        </form>
        <p>Si no recuerda su número de cuenta o contraseña, contacte a un administrador.<p> <br>
        <button class="bt" id="btnRegresar" type="button" onclick="redirectPage('index.php')">Regresar a página principal</button>
    </div>
</div>
<script >
	function redirectPage(url) {
            var form = document.createElement('form');
            form.method = 'post';
            form.action = url;
            document.body.appendChild(form);
            form.submit();
        }
</script>
</body>
</html>

<?php
if(isset($_POST['Acceder'])){
    $u_Ser=$_POST['user'];
	$p_ass=$_POST['pass'];
    require_once ("acceso_login.php");
    $obj=new acceder();
	$obj->validar($u_Ser,$p_ass);
}
?> 
