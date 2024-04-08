    let menu = document.querySelector('.containerCabecera');
    
    function aplicarEstilosSegunTamanoPantalla() {
        var imagen = document.querySelector('#imgContent');
        var cuadro = document.querySelector('#cuadroDiv');
        var altura = screen.height;
        var anchura = screen.width;
        var ratio = anchura/altura;
        var isHorizontal = window.matchMedia("(orientation: landscape)").matches;
        try {
            if (ratio > 1 || isHorizontal) {

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
