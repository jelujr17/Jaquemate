const divPadre = document.querySelector('.fondoimagen');
const extras = document.querySelector('#extras');
const menu = document.getElementById('cabecera');
const div = document.querySelector('.fondoimagen');

function handleScroll() {
    const mitadAltura = div.offsetHeight / 2;
    const scrollY = window.scrollY || window.scrollX;

    // Verificar si el scroll supera la mitad de la altura del div
    if (scrollY >= mitadAltura) {
        menu.classList.remove('oculto');
    } else {
        menu.classList.add('oculto');
    }
}

function aplicarEstilosSegunTamanoPantalla() {
    const ratio = screen.width / screen.height;
    const isHorizontal = window.matchMedia("(orientation: landscape)").matches;

    try {
        if (ratio > 1 || isHorizontal) {
            divPadre.classList.add('h-100');
            divPadre.style.height = '0';
            extras.classList.add('h-25');
        } else {
            extras.classList.remove('h-25');
            divPadre.classList.remove('h-100');
            divPadre.style.height = '80vh';
        }
    } catch (error) {
        console.error("Error al aplicar estilos:", error);
    }
}

function optimizedScrollHandler() {
    let ticking = false;

    return function () {
        if (!ticking) {
            requestAnimationFrame(function () {
                handleScroll();
                ticking = false;
            });
            ticking = true;
        }
    };
}

document.addEventListener('scroll', optimizedScrollHandler());
window.addEventListener('load', aplicarEstilosSegunTamanoPantalla);
window.addEventListener('resize', aplicarEstilosSegunTamanoPantalla);