const divPadre = document.querySelector('.divSecundario');
const extras = document.querySelector('#extras');
const menu = document.querySelector('nav');
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
            menu.classList.add('oculto');
            window.addEventListener('scroll', optimizedScrollHandler());
            div.classList.add('h-100');
            div.style.height = '0';
            extras.classList.add('h-25');
        } else {
            div.style.paddingTop = menu.clientHeight + 'px';
            extras.classList.remove('h-25');
            div.classList.remove('h-100');
            div.style.height = '80vh';
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


window.addEventListener('load', aplicarEstilosSegunTamanoPantalla);
window.addEventListener('resize', aplicarEstilosSegunTamanoPantalla);