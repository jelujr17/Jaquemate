    window.addEventListener('load', aplicarEstilosSegunTamanoPantalla);
    window.addEventListener('resize', aplicarEstilosSegunTamanoPantalla);
    let menu = document.querySelector('.containerCabecera');
    document.addEventListener('scroll', function() {
        var div = document.querySelector('.fondoimagen');
        var mitadAltura = div.offsetHeight / 2;
    
        if (window.scrollY >= mitadAltura) {
            menu.classList.remove('oculto');
        } else {
            menu.classList.add('oculto');
        }
    });
function aplicarEstilosSegunTamanoPantalla() {
    var index = document.querySelector('#index');
    var divPadre = document.querySelector('.fondoimagen');
    var jaque = document.querySelector('#jaque');
    var extras = document.querySelector('#extras');
    const movilElements = document.querySelectorAll('.movil'); // Obtener todos los elementos con la clase .movil
    var altura = screen.height;
    var anchura = screen.width;
    var ratio = anchura/altura;
    var isHorizontal = window.matchMedia("(orientation: landscape)").matches;
    try {
        if (ratio > 1 || isHorizontal) {
            index.classList.remove('caja');
            index.classList.add('divSecundario');
            jaque.classList.add('text-container');
            jaque.classList.remove('min-container');
            divPadre.classList.add('h-100');
            divPadre.style.height= '0';
            movilElements.forEach(element => {
                element.classList.remove('movilDiv'); // Agregar la clase movilDiv a cada elemento
            });
        } else {
            index.classList.remove('divSecundario');
            index.classList.add('caja');
            jaque.classList.remove('text-container');
            jaque.classList.add('min-container');
            movilElements.forEach(element => {
                element.classList.add('movilDiv'); // Agregar la clase movilDiv a cada elemento
            });
            extras.classList.remove('centrado');
            extras.classList.remove('h-25');
            extras.classList.add('min-centrado');
            divPadre.classList.remove('h-100');
            divPadre.style.height= '60vh';

        }
    } catch (error) {
        alert("Error al aplicar estilos:", error);
    }
}