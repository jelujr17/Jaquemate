
    var index = document.querySelector('#index');
    var divPadre = document.querySelector('.fondoimagen');
    var jaque = document.querySelector('#jaque');
    var extras = document.querySelector('#extras');
    let menu = document.getElementById('cabecera');
    var div = document.querySelector('.fondoimagen');
function handleScroll() {
    var mitadAltura = div.offsetHeight / 2;
    
    // Verificar si el scroll supera la mitad de la altura del div
    if (window.scrollY >= mitadAltura) {
        menu.classList.remove('oculto');
    } else {
        menu.classList.add('oculto');
    }
}
function aplicarEstilosSegunTamanoPantalla() {
    var ratio = screen.width/screen.height;
    var isHorizontal = window.matchMedia("(orientation: landscape)").matches;
    try {
        if (ratio > 1 || isHorizontal) {
            index.classList.remove('caja');
            index.classList.add('divSecundario');
            jaque.classList.add('text-container');
            jaque.classList.remove('min-container');
            divPadre.classList.add('h-100');
            divPadre.style.height= '0';
            extras.classList.add('centrado');
            extras.classList.add('h-25');
            extras.classList.remove('min-centrado');
        } else {
            //menu.classList.remove('containerCabecera');
            //menu.classList.add('min-cabecera');
            index.classList.remove('divSecundario');
            index.classList.add('caja');
            jaque.classList.remove('text-container');
            jaque.classList.add('min-container');
            extras.classList.remove('centrado');
            extras.classList.remove('h-25');
            extras.classList.add('min-centrado');
            divPadre.classList.remove('h-100');
            divPadre.style.height= '80vh';

        }
    } catch (error) {
    }
}
    document.addEventListener('scroll', function() {
    requestAnimationFrame(handleScroll);
});
window.addEventListener('load', aplicarEstilosSegunTamanoPantalla);
window.addEventListener('resize', aplicarEstilosSegunTamanoPantalla);
