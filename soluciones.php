<?php include 'vista/layout/cabecera.php'; ?>
<link rel="stylesheet" href="vista/css/soluciones.css">
<div>
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
    
    <div id="myCarousel" class="carousel slide h-auto" data-bs-ride="carousel" data-bs-pause="false">
        <div class="carousel-inner">
            <div class="carousel-item active h-75">
                <img src="vista/assets/servicios.png" class="d-block w-100" alt="...">
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>1</h1>
                        <p class="opacity-75">Some representative placeholder content for the first slide of the
                            carousel.</p>
                        <p><a class="btn btn-lg btn-warning mostrar-btn">Ver más</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item h-75">
                <!-- Reemplaza la imagen de fondo aquí -->
                <img src="vista/assets/servicios.png" class="d-block w-100" alt="...">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>2</h1>
                        <p>Hacemos realidad tus ideas digitales.</p>
                        <p><a class="btn btn-lg btn-warning mostrar-btn">Ver más</a></p>
                    </div>
                </div>
            </div>

            <div class="carousel-item h-75">
                <img src="vista/assets/servicios.png" class="d-block w-100" alt="...">
                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>3</h1>
                        <p>Some representative placeholder content for the third slide of this carousel.</p>
                        <p><a class="btn btn-lg btn-warning mostrar-btn">Ver productos</a></p>
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
        <div class="carousel-item-expanded h-auto">
            
            <div class="texto-oculto-contenedor">
            <hr class="w-75 mx-auto blanco">
                <p class="m-3">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>
            </div>
            <div class="texto-oculto-contenedor">
                <p>Este es el texto oculto de la sección 2.</p>
            </div>
            <div class="texto-oculto-contenedor">
                <p>Este es el texto oculto de la sección 3.</p>
            </div>
        </div>
    </div>
</div>

<script src="vista/js/soluciones.js">

</script>
<?php include 'vista/layout/footer.php'; ?>