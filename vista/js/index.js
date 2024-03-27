window.addEventListener("load", inicio);

function inicio(){
    let menu = document.querySelector('.containerCabecera');
    document.addEventListener('scroll', function() {
        var div = document.querySelector('.fondoimagen');
        var mitadAltura = div.offsetHeight / 2;
    
        if (window.scrollY >= mitadAltura) {
            menu.classList.remove('oculto');
        } else {
            menu.classList.add('oculto');
        }
    });
}