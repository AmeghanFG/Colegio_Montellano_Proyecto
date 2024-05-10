
 var opcion = document.getElementById("opcion").value;

 console.log(opcion);

   // Asociar la función generar_password con el botón "Generar Contraseña" en el primer formulario
document.querySelector("#btn_generarPassword").addEventListener("click", function() {
    generar_password("password");
});

// Asociar la función generar_password con el botón "Generar Contraseña" en el segundo formulario
document.querySelector("#btn_generarPasswordForm2").addEventListener("click", function() {
    generar_password("password2");
});

// Asociar la función generar_password con el botón "Generar Contraseña" en el tercer formulario
document.querySelector("#btn_generarPasswordForm3").addEventListener("click", function() {
    generar_password("password3");
});

function generar_password(inputId) {
    // Longitud de la contraseña, caracteres que puede tener y donde se guardara la contraseña
    var longitud = 10;
    var caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var contrasena = '';

    // Generar contraseña aleatoria
    for (var i = 0; i < longitud; i++) {
        var indice = Math.floor(Math.random() * caracteres.length);
        contrasena += caracteres.charAt(indice);
    }

    // Mostrar la contraseña generada en el campo de contraseña
    document.getElementById(inputId).value = contrasena;
}
