const jaquemateTitle = document.getElementById('jaquemateTitle');
const legalTitle = document.getElementById('legalTitle');
const contactoTitle = document.getElementById('contactoTitle');
const jaquemateOptions = document.getElementById('jaquemateOptions');
const legalOptions = document.getElementById('legalOptions');
const contactoOptions = document.getElementById('contactoOptions');

// Agregar eventos de clic a los títulos
jaquemateTitle.addEventListener('click', () => toggleOptions(jaquemateOptions));
legalTitle.addEventListener('click', () => toggleOptions(legalOptions));
contactoTitle.addEventListener('click', () => toggleOptions(contactoOptions));

// Función para mostrar u ocultar las opciones
function toggleOptions(options) {
  if (window.innerWidth < 1200) {
    if (options.style.display == 'block') {
      options.style.display = 'none';
    } else {
      options.style.display = 'block';
    }
  }
}


const iconSad = document.getElementById('sad');
const iconMidSad = document.getElementById('mid-sad');
const iconNeutral = document.getElementById('neutral');
const iconHappy = document.getElementById('happy');
const iconVeryHappy = document.getElementById('very-happy');


function setRating(optionId) {
  console.log("ID del elemento recibido:", optionId);
  // Obtener el elemento del DOM correspondiente al id proporcionado
  const optionElement = document.getElementById(optionId);
  console.log("Elemento del DOM encontrado:", optionElement);
  if (optionElement) {
    // Restablecer el color de todos los elementos
    iconSad.style.color = 'black';
    iconMidSad.style.color = 'black';
    iconNeutral.style.color = 'black';
    iconHappy.style.color = 'black';
    iconVeryHappy.style.color = 'black';

    switch (optionId) {
      case 'sad':
        optionElement.style.color = "#c21300";
        break;
      case 'mid-sad':
        optionElement.style.color = "#ff7207";
        break;
      case 'neutral':
        optionElement.style.color = "#ffc107";
        break;
      case 'happy':
        optionElement.style.color = "#bfe002";
        break;
      case 'very-happy':
        optionElement.style.color = "#2fe002";
        break;
      // Puedes tener más casos según sea necesario
      default:
      // Código a ejecutar si la variable no coincide con ningún caso
    }
  } else {
    console.error("El elemento con ID", optionId, "no se encontró en el documento HTML.");
  }
}

