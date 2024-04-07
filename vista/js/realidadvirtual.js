
    let menu = document.querySelector('.containerCabecera');
    document.addEventListener('scroll', function() {
        var div = document.querySelector('#imgContent');
        var mitadAltura = div.offsetHeight / 2;
    
        if (window.scrollY >= mitadAltura) {
            menu.classList.remove('oculto');
        } else {
            menu.classList.add('oculto');
        }
    });
    function aplicarEstilosSegunTamanoPantalla() {
        var blurryBackground = document.querySelector('.blurry-background');
        var fondo = document.querySelector('#fondoDiv');
        var marcasHeading = document.querySelector('#marcas h1');
        var altura = screen.height;
        var anchura = screen.width;
        var ratio = anchura/altura;
        var isHorizontal = window.matchMedia("(orientation: landscape)").matches;
        try {
            if (ratio > 1 || isHorizontal) {
                blurryBackground.classList.remove('small-screen');
                blurryBackground.classList.add('large-screen');
                // Ajustar el tamaño del encabezado según la pantalla
                marcasHeading.style.fontSize = "6vw";
            } else {
                blurryBackground.classList.remove('large-screen');
                blurryBackground.classList.add('small-screen');
                fondo.classList.remove('fondo');
                fondo.classList.add('min-fondo');
                // Ajustar el tamaño del encabezado según la pantalla
                marcasHeading.style.fontSize = "10vw";
            }
        } catch (error) {
            alert("Error al aplicar estilos:", error);
        }
    }
    
    window.addEventListener('load', aplicarEstilosSegunTamanoPantalla);
    window.addEventListener('resize', aplicarEstilosSegunTamanoPantalla);
    