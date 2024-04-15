let menu = document.querySelector('.containerCabecera');
var imagen = document.querySelector('#imgContent');
var cuadro = document.querySelector('#cuadroDiv');
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
                imagen.classList.add('imagen'); 
                imagen.classList.remove('min-imagen');
                cuadro.classList.add('cuadro');
                cuadro.classList.remove('min-cuadro');
                menu.classList.add('oculto');
            } else {
                imagen.classList.remove('imagen');
                imagen.classList.add('min-imagen');
                cuadro.classList.remove('cuadro');
                cuadro.classList.add('min-cuadro');
                menu.classList.remove('oculto');
                //marcasHeading.style.fontSize = "10vw";
            }
        } catch (error) {
            alert("Error al aplicar estilos:", error);
        }
    }
    
    window.addEventListener('load', aplicarEstilosSegunTamanoPantalla);
    window.addEventListener('resize', aplicarEstilosSegunTamanoPantalla);
