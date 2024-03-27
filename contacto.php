<?php include 'vista/layout/cabecera.php'; ?>

<div id="uno">
    <div class="p-5 mb-4">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Correo</h1>
            <p class="col-md-8 fs-4">Estamos aquí para ayudarte en todo lo que necesites. Si tienes alguna pregunta,
                comentario o consulta, no dudes en ponerte en contacto con nosotros. Puedes enviarnos un correo
                electrónico a informacion@jaquemate.es y estaremos encantados de responderte lo antes posible. </p>
                <a href="mailto:informacion@jaquemate.es" class="btn btn-warning btn-lg" role="button">Contactar</a>
        </div>
    </div>

    <div class="row align-items-md-stretch">
        <div class="col-md-6">
            <div class="h-100 p-5 text-bg-dark rounded-3">
                <h2>Teléfono</h2>
                <p>Estamos disponibles para atenderte y resolver tus consultas. Si necesitas asistencia inmediata o
                    prefieres hablar con nosotros directamente, no dudes en llamarnos. Puedes contactarnos por teléfono
                    al 966 231 926 y nuestro equipo estará encantado de ayudarte en lo que necesites.
                    ¡Estamos aquí para brindarte el mejor servicio posible!</p>
                    <a href="tel:966231926" class="btn btn-outline-light" role="button">Llamar</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="h-100 p-5 bg-body-tertiary border rounded-3">
                <h2>Dirección</h2>
                <p>Estamos ubicados en Alicante. Si deseas visitarnos en persona o enviarnos correspondencia,
                    nuestra dirección es la siguiente: Calle Jose Aldeguer, 7, 03016. Estamos convenientemente situados y
                    listos para recibirte en cualquier momento. ¡Esperamos verte pronto en nuestras instalaciones!</p>
                    <a href="https://www.google.com/maps?q=Calle+Jose+Aldeguer,+7,+03016+Alicante" class="btn btn-outline-secondary" role="button" target="_blank">Ver ubicación</a>
            </div>
        </div>
    </div>
</div>
<script>
    var div = document.querySelector('.containerCabecera');
    var carousel = document.querySelector('#uno');
    var altura = div.clientHeight;
    carousel.style.marginTop = altura + 'px';
</script>

<?php include 'vista/layout/footer.php'; ?>