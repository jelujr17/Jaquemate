    const tel = document.querySelector('.row');
    var div = document.querySelector('.containerCabecera ul');
    var marketing = document.querySelector('.dos');
    var altura = div.clientHeight;
    marketing.style.marginTop = altura + 'px';
    function aplicarEstilosSegunTamanoPantalla() {
        var ratio = screen.width/screen.height;
        var isHorizontal = window.matchMedia("(orientation: landscape)").matches;
        try {
            if (ratio > 1 || isHorizontal) {
                tel.classList.remove('container-fluid');
                tel.classList.add('w-75');
                menu.classList.add('oculto');
            } else {
                tel.classList.add('container-fluid');
                tel.classList.remove('w-75');
                //marcasHeading.style.fontSize = "10vw";
            }
        } catch (error) {    
        }
    }
    
    window.addEventListener('load', aplicarEstilosSegunTamanoPantalla);
    window.addEventListener('resize', aplicarEstilosSegunTamanoPantalla);
