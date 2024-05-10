//*Enlazar un contenedor por medio de su identificador a una constante ya que no cabia de valor
const btn_Izquierda = document.querySelector(".btn-left");
const btn_Derecha = document.querySelector(".btn-right");
const slider = document.querySelector("#slider");
const elementos = document.querySelectorAll("#carrusel_elemento");

//*Agregar un evento que al cumplirse, realice las funciones indicadas
btn_Izquierda.addEventListener("click", e => retroceder());
btn_Derecha.addEventListener("click", e => avanzar());

//*Activación actomatica de la función avanzar, por medio de un intervalo de tiempo
setInterval(() => {
    avanzar()
}, 3000);

//*Variables necesarias para la función del carrusel
let operacion = 0; //Variable para depositar los valores de las operaciones
let cont = 0; //Crearción e inicialización del contador
let cantidad_elem = 100 / elementos.length; //Obtiene la cantidad de imagenes o elementos con ".length" y se divide entre 100 para obtener la cantidad de espacio que ocupa en el contenedor

//*Inicio de las funciones para avanzar y retroceder
function avanzar() {
    if (cont >= elementos.length-1) { //Evalua si es el ultimo elemento, si es asi, reinicia todo
        //Se pone .length-1 por que se inicia a contar desde 0, no desde 1
        cont = 0;
        operacion = 0;
        slider.style.transform = `translate(-${operacion}%)`; //Devuelve al elemento 1
        slider.style.transition = "none";
        return;
    } 
    cont++;  //Cada vez que se active se suma 1
    operacion = operacion + cantidad_elem;
    slider.style.transform = `translate(-${operacion}%)`; //Recorre el elemento (<-) por eso es negativo, este valor se obtiene arriba (100/no.elementos)
    slider.style.transition = "all ease 600ms"; //Se mueve de una imagen a otra en 600 milisegundos
}  

function retroceder() {
    cont--;
    if (cont < 0 ) {
        cont = elementos.length-1;
        operacion = cantidad_elem * (elementos.length-1)
        slider.style.transform = `translate(-${operacion}%)`;
        slider.style.transition = "none";
        return;
    } 
    operacion = operacion - cantidad_elem;
    slider.style.transform = `translate(-${operacion}%)`;
    slider.style.transition = "all ease 600ms"
    
    
}   