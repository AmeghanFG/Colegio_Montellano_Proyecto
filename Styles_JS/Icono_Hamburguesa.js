
/*Selecciona el 1er elementos que coincida con un selector CSS especificado, en este caso "#baras_icono", con .addEventListener se agrega el método de activación*/
document.querySelector("#barras_icono").addEventListener("click", animacionBarras); //Al hacer el método click sobre el contendedor referenciado por el id, se activa la función "animacionBarras"

var linea1_menu = document.querySelector(".linea1_menu"); 
var linea2_menu = document.querySelector(".linea2_menu");
var linea3_menu = document.querySelector(".linea3_menu");
var conetenedor_menu = document.querySelector("#menu_hamburguesa"); //TODO Identificador del contenedor del manú

function animacionBarras(){
    linea1_menu.classList.toggle("animacion1"); //Para activar la accion de css
    linea2_menu.classList.toggle("animacion2");
    linea3_menu.classList.toggle("animacion3");

    conetenedor_menu.classList.toggle("mostrar_menu");
}