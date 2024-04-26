<?php include 'vista/layout/cabecera.php'; ?>
    <link rel="stylesheet" href="vista/css/contacto.css">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <div class="container-form h-75">
        <div class="info-form">
            <h2>Contáctanos</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui eligendi est voluptates quae ipsam eius, in quasi odio porro aut vel beatae aperiam.</p>
            <a href="#"><i class="fa fa-phone"></i> 123-456-789</a>
            <a href="#"><i class="fa fa-envelope"></i> email@tudominio.com</a>
            <a href="#"><i class="fa fa-map-marked"></i> Ciudad, Pais</a>
        </div>
        <form action="#" autocomplete="off" id="formulario">
            <input type="text" id="nombre" name="nombre" placeholder="Tu Nombre" class="campo">
            <input type="email" id="email" name="email" placeholder="Tu Email" class="campo">
            <input type="text" id="asunto" name="asunto" placeholder="Asunto" class="campo">
            <div class="contenedor-textarea">
                <textarea name="mensaje" id="mensaje" maxlength="700" placeholder="Tu Mensaje..."></textarea>
                <div id="contador-caracteres">0/700</div>
            </div>
            <input type="submit" name="enviar" value="Enviar Mensaje" class="btn-enviar">
        </form>
    </div>
    <script src="vista/js/contacto.js"></script>
<?php include 'vista/layout/footer.php'; ?>