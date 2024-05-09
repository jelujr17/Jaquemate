let menu = document.querySelector('.containerCabecera');
var cuadro = document.querySelector('#imgContent');

var menuLinks = document.querySelectorAll('nav ul li a');
  
    function aplicarEstilosSegunTamanoPantalla() {
        var ratio = screen.width/screen.height;
        var isHorizontal = window.matchMedia("(orientation: landscape)").matches;
        cuadro.style.marginTop = menu.clientHeight + 'px';
        try {
            if (ratio > 1 || isHorizontal) {
            } else {
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
