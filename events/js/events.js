/* MANEJADORES DE EVENTOS COMO FUNCIONES EXTERNAS */

const muestraMensaje = () => {

    alert('Has hecho click en el Botón de Prueba');

}

/* 
 * NOTA: Para las situaciones que se reflejan a continuación, es imprescindible que la página
 * esté cargada completamente para su óptimo funcionamiento.
*/

/* MANEJADORES DE EVENTOS SEMÁNTICOS */

window.onload = () => {

    let parrafo = document.getElementById('parrafo');

    /* Funciones que se ejecutan después de suceder el evento */

    const cambiarColor = () => {

        parrafo.style.borderColor='var(--blue-crayola)';

    }

    const volverColor = () => {
  
        parrafo.style.borderColor='var(--dark-pastel-green)';

    }

    /* Podemos asociar distintos eventos a un mismo elemento */

    parrafo.onclick = cambiarColor;    // IMPORTANTE: Al asociar, no se colocan
                                                                    // los () después de los nombre de las
    parrafo.onmouseout = volverColor;  // funciones.

}

/* MANEJO DE EVENTOS CON EL MODELO ESTÁNDAR (DOM NIVEL 2) */

let btn = document.getElementById('btn'); // Seleccionamos el elemento al que asociaremos el evento.

/* Funciones que se ejecutan después de suceder el evento */

const random = number => {

    return Math.floor(Math.random() * (number + 1));

}

const cambiarFondo = () => {

    let randomColor = 'rgb(' + random(255) + ',' + random(255) + ',' + random(255) + ')';

    document.body.style.backgroundColor = randomColor;

}

/* Asociamos el evento al elemento del HTML */

btn.addEventListener('click',cambiarFondo); // Hacemos uso de la función addEventListener.

/* 
 * También se puede plantear lo anterior de la siguiente forma:
 *
 * btn.addEventListener('click', () => { // Funciones anónimas como parámetros de addEventListener.
 * 
 *      let randomColor = 'rgb(' + random(255) + ',' + random(255) + ',' + random(255) + ')';
 *      document.body.style.backgroundColor = randomColor;
 * 
 * });
*/

/* Desasociar eventos de un elemento */

let btn2 = document.getElementById('btn2');

btn2.addEventListener('click', () => {

    btn.removeEventListener('click',cambiarFondo); // Se usa la función removeEventListener.

});

/* Les dejo en Classroom enlaces a páginas de consulta */