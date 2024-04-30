const divPadre = document.querySelector('.divSecundario');
const menu = document.querySelector('nav');
const div = document.querySelector('.fondoimagen');
const jaque = document.querySelector('#jaque');
var marketing = document.getElementById('marcas');
var marcasHeading = marketing.querySelector('h1');
var divMitad = document.querySelectorAll('.mitad')[1];
var imagen = divMitad.querySelector('img');
var parrafo = divMitad.querySelector('p');
const inputs = document.querySelectorAll('input[name="slide"]');
const descriptions = document.querySelectorAll('.texto .description');
var cuadroDiv = document.getElementById('cuadroDiv');
var form = document.querySelector('.container-form');

function aplicarEstilosSegunTamanoPantalla() {
    const ratio = screen.width / screen.height;
    const isHorizontal = window.matchMedia("(orientation: landscape)").matches;
    div.style.marginTop = menu.clientHeight/2 + 'px';
    marketing.style.marginTop = menu.clientHeight + 'px';

    try {
        if (ratio > 1 || isHorizontal) {
            $(imagen).before($(parrafo));
            marcasHeading.style.fontSize = "6vw";
        } else {
            $(parrafo).before($(imagen));
            marcasHeading.style.fontSize = "10vw";
            divPadre.style.top = jaque.clientHeight + menu.clientHeight + 'px';
        }
    } catch (error) {
        console.error("Error al aplicar estilos:", error);
    }
}

function showCheckedDescription() {
    inputs.forEach((input, index) => {
      if (input.checked) {
        descriptions.forEach((description, index2) => {
          description.style.display = 'none';
          document.querySelector(`[for="c${index2+1}"] h4`).style.display = 'none';
        });
        document.querySelector(`[for="c${index + 1}"] h4`).style.display = 'block';
        document.getElementById(`description-c${index + 1}`).style.display = 'block';
      }
    });
  }

  // Agrega un evento change a los inputs para mostrar la descripción correspondiente
  inputs.forEach((input) => {
    input.addEventListener('change', showCheckedDescription);
  });

showCheckedDescription();

const textarea = document.getElementById('mensaje');
const contador = document.getElementById('contador-caracteres');

// Agregar un event listener para el evento de entrada de texto
textarea.addEventListener('input', () => {
    // Obtener el número de caracteres escritos
    const caracteresEscritos = textarea.value.length;
    
    // Actualizar el contador de caracteres
    contador.textContent = caracteresEscritos + '/700';
});

window.addEventListener('load', aplicarEstilosSegunTamanoPantalla);
window.addEventListener('resize', aplicarEstilosSegunTamanoPantalla);