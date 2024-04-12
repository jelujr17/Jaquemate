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