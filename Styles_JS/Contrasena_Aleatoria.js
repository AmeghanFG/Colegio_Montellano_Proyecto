
//TODO Generación de contrseña aleatoria
document.querySelector("#btn_generarPassword").addEventListener("click", generar_password);

function generar_password(){
    //Longitud de la contraseña, caracteres que puede tener y donde se guardara la contraseña
    var longitud = 10;
    var caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var contrasena = '';

    //Generar contraseña aleatoria
    for (var i = 0; i < longitud; i++) {
        var indice = Math.floor(Math.random() * caracteres.length);
        contrasena += caracteres.charAt(indice);
    }

    //Mostrar la contraseña generada en el campo de contraseña
    document.getElementById("password").value = contrasena;
}