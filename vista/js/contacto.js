    var div = document.querySelector('.containerCabecera');
    var marketing = document.querySelector('.container-form');

    document.getElementById('formulario').addEventListener('submit', function (event) {
        event.preventDefault(); // Previene el envío del formulario por defecto
        
        const datosFormulario = {
            nombre: document.getElementById('nombre').value,
            email: document.getElementById('email').value,
            asunto: document.getElementById('asunto').value,
            mensaje: document.getElementById('mensaje').value,
        };
    
        const xhr = new XMLHttpRequest();
    
        xhr.open('POST', 'correo.php', true);
        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xhr.setRequestHeader('Content-Type', 'application/json');
    
        // Agrega un listener para el evento 'readystatechange' para manejar la respuesta cuando esté lista
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4) {
                // Verifica que la solicitud se haya completado satisfactoriamente
                if (xhr.status === 200) {
                    console.log('La solicitud se completó correctamente.');
                    document.getElementById('nombre').value = '';
            document.getElementById('email').value  = '';
            document.getElementById('asunto').value = '';
            document.getElementById('mensaje').value = '';
                    // Aquí puedes manejar la respuesta del servidor si es necesario
                } else {
                    console.log('Error al enviar la solicitud. Código de estado:', xhr.status);
                    // Aquí puedes manejar el error de la solicitud si es necesario
                }
            }
        };
    
    });
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
