let menu = document.querySelector('.containerCabecera');
var div = menu.querySelector('ul');
var cuadro = document.querySelector('#imgContent');

document.addEventListener('scroll', function() {
    var div = document.querySelector('#imgContent');
    var mitadAltura = div.offsetHeight / 2;

    if (window.scrollY >= mitadAltura) {
        menu.classList.remove('oculto');
    } else {
        menu.classList.add('oculto');
    }
});
    const inputs = document.querySelectorAll('input[name="slide"]');
    const descriptions = document.querySelectorAll('.texto .description');
    function aplicarEstilosSegunTamanoPantalla() {
        var ratio = screen.width/screen.height;
        var isHorizontal = window.matchMedia("(orientation: landscape)").matches;
        try {
            if (ratio > 1 || isHorizontal) {
                menu.classList.add('oculto');
            } else {
                menu.classList.remove('oculto');
                var altura = div.clientHeight;
                cuadro.style.marginTop = altura + 'px';
            }
        } catch (error) {
            alert("Error al aplicar estilos:", error);
        }
    }
    
    window.addEventListener('load', aplicarEstilosSegunTamanoPantalla);
    window.addEventListener('resize', aplicarEstilosSegunTamanoPantalla);
