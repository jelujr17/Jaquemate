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
                        <p class="opacity-75">Descubre nuestra gama de software.</p>
                        <p><a class="btn btn-lg btn-warning" onclick="scrollToSection('software')">Ver más</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="vista/assets/solucionesEmpresa.jpg" class="d-block w-100" alt="...">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                </svg>
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Soluciones empresa</h1>
                        <p>Da un salto de calidad con nuestros productos.</p>
                        <button class="btn btn-lg btn-warning" onclick="scrollToSection('solEmp')">Ver
                            productos</button>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <!-- Reemplaza la imagen de fondo aquí -->
                <img src="vista/assets/servicios.jpg" class="d-block w-100" alt="...">
                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>Servicios</h1>
                        <p>Hacemos realidad tus ideas.</p>
                        <button class="btn btn-lg btn-warning" onclick="scrollToSection('servicio')">Ver
                            mas</button>

                    </div>
                </div>
            </div>
            <script>
                function scrollToSection(sectionId) {
                    var section = document.getElementById(sectionId);
                    if (section) {
                        section.scrollIntoView({ behavior: 'smooth', block: 'start' });

                        // Eliminar la parte del ancla de la URL
                        history.replaceState({}, document.title, window.location.href.split('#')[0]);
                    }
                }
            </script>

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


    <div class="container py-1" id="software">
        <h1 class="text-body-emphasis">Descubre nuestra gama de software</h1>
        <p class="fs-5 col-md-8">Explora nuestra gama de software, que incluye una variedad de herramientas diseñadas
            para diferentes necesidades. Desde gestión residencial hasta productividad, nuestros productos
            ofrecen soluciones eficientes. Algunos proyectos están aún en desarrollo para ofrecerte aún más opciones
            innovadoras.</p><br>

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
                <h2 class="text-body-emphasis">Guías</h2>
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
        <hr class="featurette-divider">
    </div>


    <div class="container my-5" id="solEmp">
        <div class="position-relative p-5 text-center text-muted bg-body border border-dashed rounded-5">

            <svg class="bi mt-5 mb-3" width="48" height="48">
                <use xlink:href="#check2-circle" />
            </svg>
            <h1 class="text-body-emphasis">Soluciones Empresa</h1>
            <p class="col-lg-6 mx-auto mb-4">
                En el entorno empresarial, la selección cuidadosa de productos adecuados es esencial para garantizar un
                ambiente de trabajo óptimo. Esto puede contribuir significativamente al bienestar y la productividad de
                los empleados, lo que a su vez promueve el éxito general de la empresa.
            </p>
            <button class="btn btn-warning px-5 mb-5" type="button"
                onclick="window.location.href='https://store.jaquemate.es'">
                Ver productos
            </button>
        </div>
        <hr class="featurette-divider">
    </div>

    <div class="container py-1" id="servicio">
        <h1 class="text-body-emphasis">Si lo sueñas, es real</h1>
        <p class="fs-5 col-md-8">En Jaquemate, nos especializamos en ofrecer un servicio personalizado de desarrollo de
            programas y software. Nuestro enfoque se centra en entender las necesidades específicas de cada cliente para
            crear soluciones a medida que satisfagan sus requerimientos. Desde aplicaciones móviles hasta sistemas de
            gestión empresarial, estamos comprometidos en proporcionar productos de calidad que impulsen el éxito de
            nuestros clientes en el mundo digital.</p><br>
        <p>Si deseas obtener más información, no dudes en <a href="contacto.php">contactarnos</a>.</p>
    </div>

</div>


<?php include 'vista/layout/footer.php'; ?>