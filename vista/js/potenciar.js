window.addEventListener("load", inicio);

function inicio(){
    var div = document.querySelector('.containerCabecera');
    var carousel = document.querySelector('#marcas');
    var alturaDiv = div.clientHeight;
    carousel.style.marginTop = alturaDiv + 'px';
}