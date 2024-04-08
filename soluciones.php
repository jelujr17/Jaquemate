<?php include 'vista/layout/cabecera.php'; ?>
<link rel="stylesheet" href="vista/css/soluciones.css">

    <div id="cuadroDiv" class="container marketing pt-3">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">Siempre pensando en el <span
                        class="text-body-secondary">Futuro.</span></h2>
                <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting
                    prose here.</p>
            </div>
            <div class="col-md-5">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                    height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" /><text x="50%" y="50%"
                        fill="var(--bs-secondary-color)" dy=".3em">500x500</text>
                </svg>
            </div>
        </div>
        <hr class="featurette-divider">
    </div>
    
  <!--  <div id="myCarousel" class="carousel slide h-auto">
    <div class="carousel-inner justify-content-center">
        <div class="carousel-item active">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <img src="vista/assets/empresa.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="col-md-4">
                    <img src="vista/assets/servicios.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <h1>1</h1>
                        <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p>
                        <p><a class="btn btn-lg btn-warning mostrar-btn">Ver más</a></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="vista/assets/abuelos_portada.png" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>-->
    
</div>
<section class="slider-container">
      <div class="slider-images">
        <div class="slider-img">
          <img src="vista/assets/empresa.jpg" alt="1" />
          <div class="details">
          <h1>EL Pepito</h1>
        <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p>
          </div>
        </div>
        <div class="slider-img active">
          <img src="vista/assets/servicios.png" alt="2" />
          <div class="details open">
          <h1>El futuro</h1>
        <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p>
          </div>
        </div>
        <div class="slider-img">
          <img src="vista/assets/abuelos_portada.png" alt="3" />
          <div class="details">
          <h1>Hola Jose</h1>
        <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p>
          </div>
        </div>
      </div>
    </section>
<script src="vista/js/jQuery.js"></script>
    <script>
      jQuery(document).ready(function ($) {
        $(".slider-img").on("click", function () {
          $(".slider-img").removeClass("active");
          $(".slider-img").find(".details").removeClass("open");
          $(this).addClass("active");
          $(this).find(".details").addClass("open");
        });
      });
    </script>
<script src="vista/js/soluciones.js"></script>
<?php include 'vista/layout/footer.php'; ?>