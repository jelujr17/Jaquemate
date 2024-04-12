var div = document.querySelector('.containerCabecera ul');
var wrapper = document.querySelector('.wrapper');
var cuadro = document.querySelector('#cuadroDiv');
    var altura = div.clientHeight;
    cuadro.style.marginTop = altura + 'px';
    const inputs = document.querySelectorAll('input[name="slide"]');
    const descriptions = document.querySelectorAll('.texto .description');
  
    // Función para mostrar la descripción correspondiente al input marcado
    function showCheckedDescription() {
      inputs.forEach((input, index) => {
        if (input.checked) {
          descriptions.forEach(description => {
            description.style.display = 'none';
          });
          document.getElementById(`description-c${index + 1}`).style.display = 'block';
        }
      });
    }
  
    // Agrega un evento change a los inputs para mostrar la descripción correspondiente
    inputs.forEach((input) => {
      input.addEventListener('change', showCheckedDescription);
    });
function aplicarEstilosSegunTamanoPantalla() {
    var ratio = screen.width/screen.height;
    var isHorizontal = window.matchMedia("(orientation: landscape)").matches;
        if (ratio > 1 || isHorizontal) {
            cuadro.classList.add('cuadro');
            cuadro.classList.remove('min-cuadro');
            wrapper.classList.add('wrapper');
            wrapper.classList.remove('min-wrapper');
            /*aluraCarousel.forEach(element => {
                element.classList.add('h-75');
            });*/
        } else {
            cuadro.classList.remove('cuadro');
            cuadro.classList.add('min-cuadro');
            wrapper.classList.remove('wrapper');
            wrapper.classList.add('min-wrapper');
            div.classList.remove('oculto');
            /*aluraCarousel.forEach(element => {
                element.classList.remove('h-75');
            });*/
            //marcasHeading.style.fontSize = "10vw";
        }
}

window.addEventListener('load', aplicarEstilosSegunTamanoPantalla);
window.addEventListener('resize', aplicarEstilosSegunTamanoPantalla);
showCheckedDescription();