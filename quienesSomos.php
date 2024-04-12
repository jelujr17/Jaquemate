<?php include '../vista/layout/cabeceraFooter.php'; ?>

<div class="px-4 pt-5 my-5 text-center">
  <h1 class="NuestraHistoria">Nuestra historia</h1>
  <div class="col-lg-6 mx-auto">
    <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most
      popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive
      prebuilt components, and powerful JavaScript plugins.</p>
  </div>
</div>
<br>
<hr class="featurette-divider">

<br>
<div class="container">
  <div class="row justify-content-center"> <!-- Añadimos la clase justify-content-center -->
    <div class="col-lg-12"> <!-- Ajustamos el tamaño del contenedor -->
      <!-- Inserta el iframe con el video de YouTube -->
      <div class="embed-responsive embed-responsive-16by9"> <!-- Cambiamos la clase a embed-responsive-16by9 -->
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/TU5C8fQFgEY" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>
<br>
<hr class="featurette-divider">
<br>

<!-- Agrega el código HTML para los botones y el modal -->
<div class="row justify-content-center">
  <div class="col-lg-4 text-center">
    <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg"
      role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
      <image href="../vista/assets/icono.png" width="140" height="140" />
    </svg>
    <h2 class="fw-normal">Nuestros compromisos</h2>
    <br>
    <p>En Jaquemate, nos comprometemos a ofrecer un servicio excepcional y a establecer relaciones sólidas basadas en la
      confianza, la seguridad y el compromiso. Nuestra misión es proporcionar soluciones innovadoras que superen las
      expectativas de nuestros clientes y promuevan el éxito mutuo. </p>
    <br>
    <button type="button" class="btn btn-secondary btn-dark" data-bs-toggle="modal"
      data-bs-target="#modalCompromisos">Descubrenos &raquo;</button>

  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4 text-center">
    <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg"
      role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
      <image href="../vista/assets/icono.png" width="140" height="140" />
    </svg>
    <h2 class="fw-normal">¿Por qué Jaquemate?</h2>
    <br>
    <p>En Jaquemate, creemos firmemente en una filosofía donde todas las partes involucradas ganan. Nuestro enfoque se
      basa en la idea de que el éxito verdadero es alcanzado cuando todas las partes se benefician: nuestros clientes,
      nuestros colaboradores y nuestra comunidad.</p>
    <br>
    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalRazones">Encuentra la
      respuesta &raquo;</button>
  </div><!-- /.col-lg-4 -->
</div><!-- /.row -->

<!-- Modal para Nuestros Compromisos -->
<div class="modal fade" id="modalCompromisos" tabindex="-1" aria-labelledby="modalCompromisosLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-body p-5">
        <h2 class="fw-bold mb-4">Nuestos compromisos</h2>

        <ul class="d-grid gap-4 my-5 list-unstyled small">
          <li class="d-flex gap-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="160" height="160" fill="currentColor"
              class="bi bi-chevron-double-up" viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M7.646 2.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 3.707 2.354 9.354a.5.5 0 1 1-.708-.708z" />
              <path fill-rule="evenodd"
                d="M7.646 6.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 7.707l-5.646 5.647a.5.5 0 0 1-.708-.708z" />
            </svg>
            <div>
              <h5 class="mb-0">Crecimiento mutuo</h5>
              En Jaquemate, priorizamos el crecimiento conjunto de todas las partes involucradas. Creemos en la
              colaboración para alcanzar metas compartidas. Nuestra misión es fomentar relaciones sólidas y apoyar el
              progreso mutuo.
            </div>
          </li>
          
          <li class="d-flex gap-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="160" height="160" fill="currentColor" class="bi bi-node-plus"
              viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M11 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8M6.025 7.5a5 5 0 1 1 0 1H4A1.5 1.5 0 0 1 2.5 10h-1A1.5 1.5 0 0 1 0 8.5v-1A1.5 1.5 0 0 1 1.5 6h1A1.5 1.5 0 0 1 4 7.5zM11 5a.5.5 0 0 1 .5.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2A.5.5 0 0 1 11 5M1.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z" />
            </svg>
            <div>
              <h5 class="mb-0">A largo plazo</h5>
              Ofrecemos un seguimiento cercano y personalizado en cada etapa de su interacción con nosotros. Desde
              el primer contacto hasta la entrega final asegurando que cada cliente reciba el mejor servicio posible y
              se sienta respaldado en todo momento.
            </div>
          </li>
        </ul>
        <button type="button" class="btn btn-lg btn-warning w-100" data-bs-dismiss="modal">Genial, gracias!</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal para ¿Por qué Jaquemate? -->
<div class="modal fade" id="modalRazones" tabindex="-1" aria-labelledby="modalRazonesLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-body p-5">
        <h2 class="fw-bold mb-4">¿Por qué Jaquemate?</h2>

        <ul class="d-grid gap-4 my-5 list-unstyled small">
          <li class="d-flex gap-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor"
              class="bi bi-check-square" viewBox="0 0 16 16">
              <path
                d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
              <path
                d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z" />
            </svg>
            <div>
              <h5 class="mb-0">Confianza</h5>
              La confianza es la piedra angular de nuestra relación con nuestros clientes. Nos esforzamos por construir
              relaciones sólidas basadas en la confianza mutua, la transparencia y la integridad. Cuando eliges a
              Jaquemate, puedes estar seguro de que trabajamos con tu mejor interés en mente.
            </div>
          </li>
          <li class="d-flex gap-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="160" height="160" fill="currentColor"
              class="bi bi-database-lock" viewBox="0 0 16 16">
              <path
                d="M13 5.698a5 5 0 0 1-.904.525C11.022 6.711 9.573 7 8 7s-3.022-.289-4.096-.777A5 5 0 0 1 3 5.698V7c0 .374.356.875 1.318 1.313C5.234 8.729 6.536 9 8 9c.666 0 1.298-.056 1.876-.156-.43.31-.804.693-1.102 1.132A12 12 0 0 1 8 10c-1.573 0-3.022-.289-4.096-.777A5 5 0 0 1 3 8.698V10c0 .374.356.875 1.318 1.313C5.234 11.729 6.536 12 8 12h.027a4.6 4.6 0 0 0-.017.8A2 2 0 0 0 8 13c-1.573 0-3.022-.289-4.096-.777A5 5 0 0 1 3 11.698V13c0 .374.356.875 1.318 1.313C5.234 14.729 6.536 15 8 15c0 .363.097.704.266.997Q8.134 16.001 8 16c-1.573 0-3.022-.289-4.096-.777C2.875 14.755 2 14.007 2 13V4c0-1.007.875-1.755 1.904-2.223C4.978 1.289 6.427 1 8 1s3.022.289 4.096.777C13.125 2.245 14 2.993 14 4v4.256a4.5 4.5 0 0 0-1.753-.249C12.787 7.654 13 7.289 13 7zm-8.682-3.01C3.356 3.124 3 3.625 3 4c0 .374.356.875 1.318 1.313C5.234 5.729 6.536 6 8 6s2.766-.27 3.682-.687C12.644 4.875 13 4.373 13 4c0-.374-.356-.875-1.318-1.313C10.766 2.271 9.464 2 8 2s-2.766.27-3.682.687Z" />
              <path
                d="M9 13a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1" />
            </svg>
            <div>
              <h5 class="mb-0">Seguridad</h5>
              La seguridad es una prioridad para nosotros. Nos comprometemos a proteger tus datos y tu información
              personal con los más altos estándares de seguridad. Puedes confiar en que tus datos están en buenas manos
              con Jaquemate.
            </div>
          </li>
          <li class="d-flex gap-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor"
              class="bi bi-award-fill" viewBox="0 0 16 16">
              <path
                d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864z" />
              <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1z" />
            </svg>
            <div>
              <h5 class="mb-0">Compromiso</h5>
              Nos comprometemos a brindarte productos y servicios de la más alta calidad. Nuestro equipo está dedicado a
              superar tus expectativas y a garantizar tu satisfacción en cada interacción. Con Jaquemate, puedes contar
              con un socio comprometido que trabaja incansablemente para tu éxito.
            </div>
          </li>
        </ul>
        <button type="button" class="btn btn-lg btn-warning w-100" data-bs-dismiss="modal">Genial, gracias!</button>
      </div>
    </div>
  </div>
</div>


<?php include '../vista/layout/footerfooter.php'; ?>