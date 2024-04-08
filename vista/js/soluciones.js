let menu = document.querySelector('.containerCabecera');
var div = document.querySelector('.containerCabecera');

    var marketing = document.querySelector('.marketing');
    var altura = div.clientHeight;
    marketing.style.marginTop = altura + 'px';
        
function aplicarEstilosSegunTamanoPantalla() {
    var cuadro = document.querySelector('#cuadroDiv');
    var ratio = screen.width/screen.height;
    var isHorizontal = window.matchMedia("(orientation: landscape)").matches;
        if (ratio > 1 || isHorizontal) {
            cuadro.classList.add('cuadro');
            cuadro.classList.remove('min-cuadro');
            menu.classList.add('oculto');
            /*aluraCarousel.forEach(element => {
                element.classList.add('h-75');
            });*/
        } else {
            cuadro.classList.remove('cuadro');
            cuadro.classList.add('min-cuadro');
            menu.classList.remove('oculto');
            /*aluraCarousel.forEach(element => {
                element.classList.remove('h-75');
            });*/
            //marcasHeading.style.fontSize = "10vw";
        }
}

window.addEventListener('load', aplicarEstilosSegunTamanoPantalla);
window.addEventListener('resize', aplicarEstilosSegunTamanoPantalla);
