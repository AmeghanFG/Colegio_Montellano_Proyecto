//TODO: Ventana emergente de confirmación de eliminación de usuario

//Obtener los elementos de por medio de sus identificadores 
const btnConfirmar = document.getElementById("btn_confirmar"); //Botón de confirmación de la eliminación del usuario
const btnCancelar = document.getElementById("btn_cancelar"); //Botón para cancelar la eliminación del usuario
const VentanaEmergenete = document.getElementById("ventana_emergente"); //Contenedor de la ventana emergente 
const FormBorrarUser = document.getElementById("form_BorrarUser"); //Formulario afectado por la ventana
const btnBorrarUser = document.getElementById("btn_borraruser"); //Botón que activa la ventana

    //*Agregar un eventos que al cumplirse, realice las funciones indicadas

    //TODO: Para evitar que active el botón de eliminar usuario de la ventana emergente con ENTER (por ser submit)
    const identificadorInput = document.getElementById("identificador");
    identificadorInput.addEventListener("keydown", function(event) {
        if (event.key === "Enter") {
            event.preventDefault();
            document.getElementById("btn_borraruser").click();
        }
    });

    //Muestra la ventana emergente en busca de confirmar la eliminación del usuario
    btnBorrarUser.addEventListener('click', mostrarVentana);

    function mostrarVentana(){
    //*Validación para que no pueda abrir la ventana a menos que haya información en el input 
    let NoCuenta = document.getElementById("identificador").value; //Obtener el valor del input donde se ingresa el no. Cuenta 


    //Condiciones: No puede estar vacio, no puede haber espacios, solo puede tener numeros
        if(NoCuenta.trim() ==='' || NoCuenta.includes(' ') || !/^\d+$/.test(NoCuenta)){
            if(!/^\d+$/.test(NoCuenta)) {
                document.getElementById("Mensajes_error").textContent = "Solo se permiten números enteros";
            }
            if(NoCuenta.trim() === '' ){
                document.getElementById("Mensajes_error").textContent = NoCuenta + "Ingresa al menos un número";
            }
            if(NoCuenta.includes(' ')) {
                document.getElementById("Mensajes_error").textContent = "No debe tener espacios";
            }
        }
        else
        {
            VentanaEmergenete.style.display = 'flex';
            document.getElementById("Mensajes_error").textContent = "";
            document.getElementById("identificador").value="";
        }
    }

    //Para cancelar la ventana/operación
    btnCancelar.addEventListener('click', cancelaroperacion);

    function cancelaroperacion(){
        VentanaEmergenete.style.display = 'none';
    }

    //Para confirmar la eliminación del usuario al hacer click en el botón de confirmar
    btnConfirmar.addEventListener('click', eliminarusuario);

    function eliminarusuario(){
    FormBorrarUser.submit(); // Envió de la petición para eliminar el usuario
    document.getElementById("identificador").value="";
    VentanaEmergenete.style.display = 'none'; // Ocultar ventana emergente después de confirmar
    //*Insertar la lógica si realmente no hubo problemas, puede hacerse en php
    alert("El usuario ha sido correctamente eliminado");
}




