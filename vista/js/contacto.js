    const ds = document.querySelectorAll('ds2');
    const tel = document.querySelector('.row');
    function aplicarEstilosSegunTamanoPantalla() {

        var altura = screen.height;
        var anchura = screen.width;
        var ratio = anchura/altura;
        var isHorizontal = window.matchMedia("(orientation: landscape)").matches;
        try {
            if (ratio > 1 || isHorizontal) {
                ds.classList.add('ds2');
                ds.classList.remove('min-ds');
                tel.classList.remove('container-fluid');
                tel.classList.add('w-75');
                menu.classList.add('oculto');
            } else {
                ds.classList.remove('ds2');
                ds.classList.add('min-ds');
                tel.classList.add('container-fluid');
                tel.classList.remove('w-75');
                menu.classList.remove('oculto');
                //marcasHeading.style.fontSize = "10vw";
            }
        } catch (error) {
            
        }
    }
    
    window.addEventListener('load', aplicarEstilosSegunTamanoPantalla);
    window.addEventListener('resize', aplicarEstilosSegunTamanoPantalla);
