const divPadre = document.querySelector('.divSecundario');
const menu = document.querySelector('nav');
const div = document.querySelector('.fondoimagen');
const jaque = document.querySelector('#jaque');
var marketing = document.getElementById('marcas');
var marcasHeading = marketing.querySelector('h1');
const inputs = document.querySelectorAll('input[name="slide"]');
const descriptions = document.querySelectorAll('.texto .description');
var cuadroDiv = document.getElementById('cuadroDiv');
var form = document.querySelector('.container-form');

function aplicarEstilosSegunTamanoPantalla() {
    const ratio = screen.width / screen.height;
    const isHorizontal = window.matchMedia("(orientation: landscape)").matches;
    div.style.marginTop = menu.clientHeight + 'px';
    marketing.style.marginTop = menu.clientHeight + 'px';

    try {
        if (ratio > 1 || isHorizontal) {
            marcasHeading.style.fontSize = "6vw";
        } else {
            marcasHeading.style.fontSize = "10vw";
        }
    } catch (error) {
        console.error("Error al aplicar estilos:", error);
    }
}

function toggleText(id) {
  var allTextElements = document.querySelectorAll('.textos');

  // Encuentra el elemento de texto correspondiente
  var textElement = document.getElementById('textos-' + id);

  // Comprueba si el elemento ya tiene la clase 'mostrar'
  if (textElement.classList.contains('mostrar')) {
    // Si tiene la clase, la quita (oculta el texto)
    textElement.classList.remove('mostrar');
  } else {
    // Si no la tiene, oculta todos los textos y muestra el seleccionado
    allTextElements.forEach(function(el) {
      el.classList.remove('mostrar'); // Oculta todos los textos
    });

    textElement.classList.add('mostrar'); // Muestra el texto correspondiente
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