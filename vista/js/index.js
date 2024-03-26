window.addEventListener("load", inicio);

function inicio(){
    let menu = document.querySelector('.containerCabecera');
    menu.classList.add('oculto');
    document.addEventListener('scroll', function() {
        /*var menu = document.getElementById('menu');
        var puntoDeMostrarMenu = document.getElementById('punto-de-mostrar-menu');
        var puntoOffsetTop = puntoDeMostrarMenu.offsetTop;
    
        if (window.pageYOffset >= puntoOffsetTop) {
            menu.classList.add('visible');
        } else {
            menu.classList.remove('visible');
        }*/
    });
}