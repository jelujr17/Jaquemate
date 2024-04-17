var div = document.querySelector('.containerCabecera ul');
var marketing = document.getElementById('marcas');
var marcasHeading = marketing.querySelector('h1');
var divMitad = document.querySelectorAll('.mitad')[1];
var imagen = divMitad.querySelector('img');
var parrafo = divMitad.querySelector('p');

document.addEventListener('DOMContentLoaded', function() {
    marketing.style.marginTop = div.clientHeight + 'px';
    
    function aplicarEstilosSegunTamanoPantalla() {
        var ratio = window.innerWidth / window.innerHeight;
        var isHorizontal = window.matchMedia("(orientation: landscape)").matches;

        if (ratio > 1 || isHorizontal) {
            $(imagen).before($(parrafo));
            marcasHeading.style.fontSize = "6vw";
        } else {
            $(parrafo).before($(imagen));
            marcasHeading.style.fontSize = "10vw";
        }
    }

    // Inicialización de estilos al cargar y redimensionar la ventana
    window.addEventListener('load', aplicarEstilosSegunTamanoPantalla);
    window.addEventListener('resize', aplicarEstilosSegunTamanoPantalla);
    
});