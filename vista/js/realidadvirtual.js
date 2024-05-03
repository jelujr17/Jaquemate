let menu = document.querySelector('.containerCabecera');
var cuadro = document.querySelector('#imgContent');

var menuLinks = document.querySelectorAll('nav ul li a');
  
    const inputs = document.querySelectorAll('input[name="slide"]');
    const descriptions = document.querySelectorAll('.texto .description');
    function aplicarEstilosSegunTamanoPantalla() {
        var ratio = screen.width/screen.height;
        var isHorizontal = window.matchMedia("(orientation: landscape)").matches;
        try {
            if (ratio > 1 || isHorizontal) {
                menu.classList.add('oculto');
                cuadro.style.marginTop = '0px';
            } else {
                menu.classList.remove('oculto');
                cuadro.style.marginTop = menu.clientHeight + 'px';
                menuLinks.forEach(function(link) {
                    link.addEventListener('click', function() {
                      // Desmarcar el checkbox para ocultar el menú
                      document.getElementById("check").checked = false;
                    });
                  });
            }
        } catch (error) {
            alert("Error al aplicar estilos:", error);
        }
    }
    
    window.addEventListener('load', aplicarEstilosSegunTamanoPantalla);
    window.addEventListener('resize', aplicarEstilosSegunTamanoPantalla);
