const divPadre = document.querySelector('.divSecundario');
const menu = document.querySelector('nav');
const div = document.querySelector('.fondoimagen');
const jaque = document.querySelector('#jaque');
var marketing = document.getElementById('marcas');
var marcasHeading = document.getElementById('gratis');
const inputs = document.querySelectorAll('input[name="slide"]');
const descriptions = document.querySelectorAll('.texto .description');
var cuadroDiv = document.getElementById('cuadroDiv');
var form = document.querySelector('.container-form');
var ordenador = document.getElementById('ordenador');
var menuLinks = document.querySelectorAll('nav ul li a');
var marcas = document.getElementById("marcas");
var segundo = document.getElementById("segundo");

function aplicarEstilosSegunTamanoPantalla() {
    const ratio = screen.width / screen.height;
    const isHorizontal = window.matchMedia("(orientation: landscape)").matches;
    div.style.marginTop = menu.clientHeight + 'px';
    marketing.style.marginTop = menu.clientHeight + 'px';

    try {
        if (ratio > 1 || isHorizontal) {
          marcasHeading.style.fontSize = "4vw";
            ordenador.style.display = "block";
        } else {
            marcasHeading.style.fontSize = "8vw";
            ordenador.style.display = "none";
            menuLinks.forEach(function(link) {
              link.addEventListener('click', function() {
                // Desmarcar el checkbox para ocultar el menú
                document.getElementById("check").checked = false;
              });
            });
        }
    } catch (error) {
        console.error("Error al aplicar estilos:", error);
    }
}

function activateAnimation() {
  var position = marcas.getBoundingClientRect();  // Obtener posición del elemento

  if (position.top < window.innerHeight && position.bottom >= 0) {

    marcas.classList.add("active");
  }
  if (marcas.classList.contains("active")) {
    // Selecciona el elemento hermano <h1> y añade la clase para activar la animación
    var heading = document.querySelector("#gratis");
    if (heading) {
      heading.classList.add("active");
    }

    segundo.classList.add("active");

    // Selecciona el elemento hermano con la clase .blurry-background
    var blurryBackground = document.querySelector("#marcas .blurry-background");
    if (blurryBackground) {
      blurryBackground.classList.add("active");
    }
  }
}

function toggleSelectedImage(clickedElement, index) {
  const allImgHover = document.querySelectorAll('.img-hover');

  allImgHover.forEach((element, idx) => {
    if (element === clickedElement) {
      element.classList.add('selected'); // Activa el elemento

      // Asocia el índice a los elementos de texto para mostrar/ocultar
      const textElement = document.getElementById('textos-' + (idx + 1)); 
      textElement.classList.add('mostrar'); // Muestra el texto asociado
    } else {
      element.classList.remove('selected'); // Desactiva el elemento

      const textElement = document.getElementById('textos-' + (idx + 1));
      textElement.classList.remove('mostrar'); // Oculta el texto
    }
  });
}


document.querySelectorAll('.img-hover').forEach((element, index) => {
  let startX;

  // Evento para detectar el inicio del toque
  element.addEventListener('touchstart', (e) => {
    startX = e.touches[0].clientX; // Guarda la posición inicial del toque
  });

  // Evento para detectar el final del toque y calcular el deslizamiento
  element.addEventListener('touchend', (e) => {
    const endX = e.changedTouches[0].clientX; // Posición final del toque
    const deltaX = endX - startX;

    // Para el primer elemento, activa solo si desliza hacia la derecha
    if (index === 0 && deltaX > 30) {
      activateImage(0); // Activa el primer elemento
    }

    // Para el segundo elemento, activa solo si desliza hacia la izquierda
    if (index === 1 && deltaX < -30) {
      activateImage(1); // Activa el segundo elemento
    }
  });

  // Agregar evento de clic para activar/desactivar
  element.addEventListener('click', () => {
    toggleSelectedImage(element); // Alterna el estado con clic
  });
});

// Función para activar un elemento específico
function activateImage(index) {
  const allImgHover = document.querySelectorAll('.img-hover');

  allImgHover.forEach((element, idx) => {
    if (idx === index) {
      element.classList.add('selected'); // Activa el elemento
      const textElement = document.getElementById('textos-' + (idx + 1));
      textElement.classList.add('mostrar'); // Muestra el texto correspondiente
    } else {
      element.classList.remove('selected'); // Desactiva otros elementos
      const textElement = document.getElementById('textos-' + (idx + 1));
      textElement.classList.remove('mostrar'); // Oculta el texto
    }
  });
}

// Función para alternar el estado del elemento con clic
function toggleSelectedImage(clickedElement) {
  if (clickedElement.classList.contains('selected')) {
    clickedElement.classList.remove('selected'); // Desactiva el elemento si ya está activado
    const idx = Array.from(document.querySelectorAll('.img-hover')).indexOf(clickedElement);
    const textElement = document.getElementById('textos-' + (idx + 1));
    textElement.classList.remove('mostrar'); // Oculta el texto
  } else {
    activateImage(Array.from(document.querySelectorAll('.img-hover')).indexOf(clickedElement));
  }
}


function toggleText(img, id) {
  const allImgHover = document.querySelectorAll('.img-hover'); // Selecciona todos los elementos con la clase .img-hover
  
  allImgHover.forEach((element) => {
    if (element === img) {
      if(!img.classList.contains('selected'))
          element.classList.add('selected'); // Agrega la clase para aumentar tamaño
      else
         element.classList.remove('selected');
    } else {
      element.classList.remove('selected'); // Remueve la clase para disminuir tamaño
    }
  });
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

document.addEventListener("scroll", activateAnimation);
window.addEventListener('load', aplicarEstilosSegunTamanoPantalla);
window.addEventListener('resize', aplicarEstilosSegunTamanoPantalla);