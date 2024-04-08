let menu = document.querySelector('.containerCabecera');
var div = document.querySelector('.containerCabecera');

    var marketing = document.querySelector('.marketing');
    var altura = div.clientHeight;
    marketing.style.marginTop = altura + 'px';
        var myCarousel = document.getElementById('myCarousel');
        var carousel1 = new bootstrap.Carousel(myCarousel);
        var carouselItems = myCarousel.querySelectorAll('.carousel-item');

        // Detener el intervalo de desplazamiento automático cuando se hace clic en un botón del carousel
        var carouselControls = myCarousel.querySelectorAll('.btn');
        carouselControls.forEach(function (control) {
            control.addEventListener('click', function () {
                myCarousel.setAttribute('data-bs-ride', null);
            });
        });
        var carouselNavButtons  = myCarousel.querySelectorAll('.carousel-control-prev, .carousel-control-next');
        carouselNavButtons .forEach(function (button) {
            button.addEventListener('click', function () {
                let mostrar = document.querySelector('.mostrar-texto');
                if(mostrar)
                    mostrar.classList.remove('mostrar-texto');
                myCarousel.setAttribute('data-bs-ride', 'carousel');
            });
        });
        var botones = document.querySelectorAll('.mostrar-btn');
        var textosOcultos = document.querySelectorAll('.texto-oculto-contenedor');

        botones.forEach(function (boton, index) {
            boton.addEventListener('click', function () {
                carousel1.pause();
                document.getElementById('myCarousel').classList.add('carousel-item-expanded');
                if(!textosOcultos[index].classList.contains('mostrar-texto'))
                    textosOcultos[index].classList.add('mostrar-texto');
                
                textosOcultos.forEach(function (texto, i) {
                    // Si no es el texto oculto actual y tiene la clase 'mostrar-texto', la elimina
                    if (i !== index && texto.classList.contains('mostrar-texto')) {
                        texto.classList.remove('mostrar-texto');
                    }
                });
            });
        });
function aplicarEstilosSegunTamanoPantalla() {
    var carousel = document.querySelector('#myCarousel');
    var cuadro = document.querySelector('#cuadroDiv');
    const aluraCarousel = carousel.querySelectorAll('.carousel-item');
    var ratio = screen.width/screen.height;
    var isHorizontal = window.matchMedia("(orientation: landscape)").matches;
        if (ratio > 1 || isHorizontal) {
            carousel.classList.add('imagen');
            carousel.classList.remove('min-imagen');
            cuadro.classList.add('cuadro');
            cuadro.classList.remove('min-cuadro');
            menu.classList.add('oculto');
            aluraCarousel.forEach(element => {
                element.classList.add('h-75');
            });
        } else {
            carousel.classList.remove('imagen');
            carousel.classList.add('min-imagen');
            cuadro.classList.remove('cuadro');
            cuadro.classList.add('min-cuadro');
            menu.classList.remove('oculto');
            aluraCarousel.forEach(element => {
                element.classList.remove('h-75');
            });
            //marcasHeading.style.fontSize = "10vw";
        }
}

window.addEventListener('load', aplicarEstilosSegunTamanoPantalla);
window.addEventListener('resize', aplicarEstilosSegunTamanoPantalla);
