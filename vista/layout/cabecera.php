<head>
  <?php
  $current_page = basename($_SERVER['PHP_SELF']);

  $titulo_pagina = '';

  switch ($current_page) {
    case 'index.php':
      $titulo_pagina = 'Inicio';
      break;
    case 'otro_archivo.php':
      $titulo_pagina = 'Título para otro archivo';
      break;
    case 'otro_mas.php':
      $titulo_pagina = 'Título para otro más';
      break;
    default:
      $titulo_pagina = 'Título por defecto';
      break;
  }
  ?>
  <title>
    <?php echo $titulo_pagina; ?>
  </title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/cabecera.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="containerCabecera">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start ">
      <a href="index.php" class="d-inline-flex link-body-emphasis text-decoration-none m-3">
        <img src="assets/icono.png" alt="Logo" width="65" height="50">
      </a>


      <?php
// Obtener el nombre de la página actual
$current_page = basename($_SERVER['PHP_SELF']);
?>

<ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
  <?php if ($current_page === 'potenciar.php') : ?>
    <div class="menu">
      <li><a href="potenciar.php" class="nav-link px-2 text-white">Potenciamos tu marca</a></li>
    </div>
  <?php else : ?>
    <li><a href="potenciar.php" class="nav-link px-2 text-white">Potenciamos tu marca</a></li>
  <?php endif; ?>

  <?php if ($current_page === 'realidadvirtual.php') : ?>
    <div class="menu">
      <li><a href="realidadvirtual.php" class="nav-link px-2 text-white">Realidad Virtual</a></li>
    </div>
  <?php else : ?>
    <li><a href="realidadvirtual.php" class="nav-link px-2 text-white">Realidad Virtual</a></li>
  <?php endif; ?>

  <?php if ($current_page === 'soluciones.php') : ?>
    <div class="menu">
      <li><a href="soluciones.php" class="nav-link px-2 text-white">Soluciones</a></li>
    </div>
  <?php else : ?>
    <li><a href="soluciones.php" class="nav-link px-2 text-white">Soluciones</a></li>
  <?php endif; ?>

  <?php if ($current_page === 'contacto.php') : ?>
    <div class="menu">
      <li><a href="contacto.php" class="nav-link px-2 text-white">Contacto</a></li>
    </div>
  <?php else : ?>
    <li><a href="contacto.php" class="nav-link px-2 text-white">Contacto</a></li>
  <?php endif; ?>
</ul>

    </div>
  </div>
</body>