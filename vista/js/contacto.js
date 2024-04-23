    var div = document.querySelector('.containerCabecera');
    var marketing = document.querySelector('.container-form');

    function aplicarEstilosSegunTamanoPantalla() {
        var ratio = screen.width/screen.height;
        var isHorizontal = window.matchMedia("(orientation: landscape)").matches;
        marketing.style.paddingTop = (div.clientHeight * 1.2) + 'px';
        try {
            if (ratio > 1 || isHorizontal) {
                
                menu.classList.add('oculto');
            } else {
                marketing.classList.remove('h-75');
                marketing.style.height = 'auto';
            }
        } catch (error) {    
        }
    }
    const textarea = document.getElementById('mensaje');
const contador = document.getElementById('contador-caracteres');

// Agregar un event listener para el evento de entrada de texto
textarea.addEventListener('input', () => {
    // Obtener el número de caracteres escritos
    const caracteresEscritos = textarea.value.length;
    
    // Actualizar el contador de caracteres
    contador.textContent = caracteresEscritos + '/700';
});
    
    window.addEventListener('load', aplicarEstilosSegunTamanoPantalla);
    window.addEventListener('resize', aplicarEstilosSegunTamanoPantalla);
