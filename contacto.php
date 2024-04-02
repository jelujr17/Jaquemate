<?php include 'vista/layout/cabecera.php'; ?>
    <link rel="stylesheet" href="vista/css/contacto.css">
    <div class="p-5 pt-0 uno">
        <div class="container-fluid py-5 ds2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-check" viewBox="0 0 16 16">
                <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z"/>
                <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686"/>
            </svg>
            <p class="col-md-8 fs-4">Estamos aquí para ayudarte en todo lo que necesites. Si tienes alguna pregunta,
                comentario o consulta, no dudes en ponerte en contacto con nosotros. Puedes enviarnos un correo
                electrónico a informacion@jaquemate.es y estaremos encantados de responderte lo antes posible. </p>
            <a href="mailto:informacion@jaquemate.es" class="btn btn-warning btn-lg" role="button">Contactar</a>
        </div>
    </div>

    <div class="row row-cols-sg-1 row-cols-lg-2 g-5 start-50 w-75 h-auto mx-auto ds">
        <div class="col">
            <div class="h-100 p-4 text-bg-dark rounded-3">
                <div class="d-flex justify-content-center align-items-center mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                    </svg>
                </div>
                <p>Estamos disponibles para atenderte y resolver tus consultas. Si necesitas asistencia inmediata o
                    prefieres hablar con nosotros directamente, no dudes en llamarnos. Puedes contactarnos por teléfono
                    al 966 231 926 y nuestro equipo estará encantado de ayudarte en lo que necesites.
                    ¡Estamos aquí para brindarte el mejor servicio posible!</p>
                <a href="tel:966231926" class="btn btn-outline-light" role="button">Llamar</a>
            </div>
        </div>
        <div class="col-ld-6">
            <div class="h-100 p-4 bg-body-tertiary border rounded-3">
                <div class="d-flex justify-content-center align-items-center mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-map mx-auto" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.5.5 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103M10 1.91l-4-.8v12.98l4 .8zm1 12.98 4-.8V1.11l-4 .8zm-6-.8V1.11l-4 .8v12.98z"/>
                    </svg>
                </div>
                <p>Estamos ubicados en Alicante. Si deseas visitarnos en persona o enviarnos correspondencia,
                    nuestra dirección es la siguiente: Calle Jose Aldeguer, 7, 03016. Estamos convenientemente situados y
                    listos para recibirte en cualquier momento. ¡Esperamos verte pronto en nuestras instalaciones!</p>
                    <a href="https://www.google.com/maps?q=Calle+Jose+Aldeguer,+7,+03016+Alicante" class="btn btn-outline-secondary" role="button" target="_blank">Ver ubicación</a>
            </div>
        </div>
    </div>
<script>
    var div = document.querySelector('.containerCabecera');
    var carousel = document.querySelector('.uno');
    var altura = div.clientHeight;
    carousel.style.marginTop = altura + 'px';
</script>

<?php include 'vista/layout/footer.php'; ?>