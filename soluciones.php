<?php include 'vista/layout/cabecera.php'; ?>

<div>
    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                </svg>
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Software</h1>
                        <p class="opacity-75">Some representative placeholder content for the first slide of the
                            carousel.</p>
                        <p><a class="btn btn-lg btn-warning" href="#">Ver más</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <!-- Reemplaza la imagen de fondo aquí -->
                <img src="vista/assets/servicios.png" class="d-block w-100" alt="...">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Servicios</h1>
                        <p>Hacemos realidad tus ideas digitales.</p>
                        <p><a class="btn btn-lg btn-warning" href="#">Ver más</a></p>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                </svg>
                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>Soluciones empresa</h1>
                        <p>Some representative placeholder content for the third slide of this carousel.</p>
                        <p><a class="btn btn-lg btn-warning" href="#">Ver productos</a></p>
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
    </div>



    <div class="container marketing">
        <hr class="featurette-divider">
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


    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
        <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button"
            aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
            <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
                <use href="#circle-half"></use>
            </svg>
            <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end px-1" aria-labelledby="bd-theme">
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light">
                    <svg class="bi me-2 opacity-50 theme-icon" width="16" height="16" fill="currentColor">
                        <use href="#sun-fill"></use>
                    </svg>
                    Light
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark">
                    <svg class="bi me-2 opacity-50 theme-icon" width="16" height="16" fill="currentColor">
                        <use href="#moon-stars-fill"></use>
                    </svg>
                    Dark
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto">
                    <svg class="bi me-2 opacity-50 theme-icon" width="16" height="16" fill="currentColor">
                        <use href="#circle-half"></use>
                    </svg>
                    Auto
                </button>
            </li>
        </ul>


    </div>

    <div class="container py-5">
        <h1 class="text-body-emphasis">Descubre nuestra gama de software</h1>
        <p class="fs-5 col-md-8">Explora nuestra gama de software, que incluye una variedad de herramientas diseñadas
            para diferentes necesidades. Desde gestión residencial hasta productividad, nuestros productos
            ofrecen soluciones eficientes. Algunos proyectos están aún en desarrollo para ofrecerte aún más opciones
            innovadoras.</p>

        <hr class="col-3 col-md-2 mb-5">

        <div class="row g-5">
            <div class="col-md-6">
                <h2 class="text-body-emphasis">Nuestros proyectos</h2>
                <p>Explora nuestra variedad de proyectos diseñados para cubrir diversas necesidades y ofrecer
                    soluciones innovadoras. </p>
                <ul class="list-unstyled ps-0">
                    <li>
                        <a class="icon-link mb-1" href="soluciones/tiemporeal.php" rel="noopener" target="_blank">
                            <svg class="bi" width="16" height="16">
                                <use xlink:href="soluciones/tiemporeal.php" />
                            </svg>
                            TiempoReal
                        </a>
                    </li>
                    <li>
                        <a class="icon-link mb-1" href="https://github.com/twbs/examples/tree/main/parcel"
                            rel="noopener" target="_blank">
                            <svg class="bi" width="16" height="16">
                                <use xlink:href="#arrow-right-circle" />
                            </svg>
                            Control de almacén
                        </a>
                    </li>
                    <li>
                        <a class="icon-link mb-1" href="https://github.com/twbs/examples/tree/main/vite" rel="noopener"
                            target="_blank">
                            <svg class="bi" width="16" height="16">
                                <use xlink:href="#arrow-right-circle" />
                            </svg>
                            Organizador
                        </a>
                    </li>
                    <li>
                        <a class="icon-link mb-1" href="https://github.com/twbs/examples/tree/main/webpack"
                            rel="noopener" target="_blank">
                            <svg class="bi" width="16" height="16">
                                <use xlink:href="#arrow-right-circle" />
                            </svg>
                            ¿Buscas más?
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-md-6">
                <h2 class="text-body-emphasis">Guias</h2>
                <p>Read more detailed instructions and documentation on using or contributing to Bootstrap.</p>
                <ul class="list-unstyled ps-0">
                    <li>
                        <a class="icon-link mb-1" href="/docs/5.3/getting-started/introduction/">
                            <svg class="bi" width="16" height="16">
                                <use xlink:href="#arrow-right-circle" />
                            </svg>
                            TiempoReal guía básica
                        </a>
                    </li>
                    <li>
                        <a class="icon-link mb-1" href="vista/assets/manualBasic.pdf" target="_blank">
                            <svg class="bi" width="16" height="16">
                                <use xlink:href="#arrow-right-circle" />
                            </svg>
                            Control de almacén guía básica
                        </a>
                    </li>
                    <li>
                        <a class="icon-link mb-1" href="/docs/5.3/getting-started/parcel/">
                            <svg class="bi" width="16" height="16">
                                <use xlink:href="#arrow-right-circle" />
                            </svg>
                            Organizador guía básica
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>

</div>
<script>
    var div = document.querySelector('.containerCabecera');
    var carousel = document.querySelector('#myCarousel');
    var altura = div.clientHeight;
    carousel.style.marginTop = altura + 'px';
</script>

<?php include 'vista/layout/footer.php'; ?>